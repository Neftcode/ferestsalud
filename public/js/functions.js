//Función para confirmar al borrar elemento
function deleteConfirm(e, evt) {
    evt.preventDefault();
    alertify.confirm("¿Está seguro de borrar este elemento?", "Esta acción no se puede deshacer.", () => {
        removeHandler(e);
    }, '');
}

//Función para remover evento submit
function removeHandler(e) {
    if (e.removeEventListener) {
        e.removeEventListener("submit", deleteConfirm);
    } else if (e.detachEvent) {
        e.detachEvent("onsubmit", deleteConfirm);
    }
    $(e).submit();
}

$("form.delete-form").each((i, e) => {
    if (e.addEventListener) {
        e.addEventListener('submit', deleteConfirm.bind(null, e));
    } else if (e.attachEvent) {
        e.attachEvent("onsubmit", deleteConfirm.bind(null, e));
    }
});

//Función para mostrar ventana alertify
function verPDF(path) {
    alertify.ContentDialog || alertify.dialog('ContentDialog', function() {
        var embed;
        return {
            main: function(path) {
                //set the path setting and return current instance for chaining.
                return this.set({ 
                    'path': path
                });
            },
            // we only want to override two options (padding and overflow).
            setup: function() {
                return {
                    buttons:[
                        {
                            text: "Aceptar!",
                            key: 27,/*Esc*/
                            className: alertify.defaults.theme.ok
                        }
                    ],
                    focus: {
                        element: 0
                    },
                    options: {
                        //disable both padding and overflow control.
                        maximizable: false,
                        padding : !1,
                        overflow: !1,
                    }
                };
            },
            // This will be called once the DOM is ready and will never be invoked again.
            // Here we create the iframe to embed the content.
            build: function() {           
                // create the iframe element
                embed = document.createElement('embed');
                embed.frameBorder = "no";
                embed.width = "100%";
                embed.height = "100%";
                // add it to the dialog
                this.elements.content.appendChild(embed);

                //give the dialog initial height (half the screen height).
                this.elements.body.style.minHeight = screen.height * .5 + 'px';
            },
            // dialog custom settings
            settings: {
                path: undefined
            },
            // listen and respond to changes in dialog settings.
            settingUpdated: function(key, oldValue, newValue) {
                switch (key) {
                    case 'path':
                        embed.src = newValue;
                        break;
                }
            },
            // listen to internal dialog events.
            hooks: {
                // triggered when a dialog option gets update.
                // warning! this will not be triggered for settings updates.
                onshow: function() {
                    alertify.message("¡Presione ESC para salir!", 10);
                },
                onupdate: function(option,oldValue, newValue) {
                    switch (option) {
                        case 'resizable':
                            if (newValue) {
                                this.elements.content.removeAttribute('style');
                                embed && embed.removeAttribute('style');
                            } else {
                                this.elements.content.style.minHeight = 'inherit';
                                embed && (embed.style.minHeight = 'inherit');
                            }
                        break;    
                    }    
                },
                onclose: function() {
                    alertify.dismissAll();
                }
            }
        };
    });
    //show the dialog
    alertify.ContentDialog(path).set({frameless: false, title:"Infografía"}).maximize();
}
alertify.defaults.theme.ok = "btn btn-ferest";
alertify.defaults.theme.cancel = "btn btn-danger";
alertify.defaults.theme.input = "form-control";

/**
 * Agregar asterisco a los campos requeridos
 */
$("input, select, textarea").each((i, e) => {
    if (e.required) {
        if (!$(e).siblings("label").hasClass("required")) {
            $(e).siblings("label").addClass("required");
        }
    }
});