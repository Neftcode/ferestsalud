<?php

namespace App\Entity;

use App\Repository\ValoracionParalisisFacialRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ValoracionParalisisFacialRepository::class)
 */
class ValoracionParalisisFacial
{
    /**
     * @ORM\Id()
     * @ORM\OneToOne(targetEntity=Admision::class, cascade={"persist", "remove"})
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $dolor_inicial;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $dolor_inicial_localizacion;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $dolor_inicial_tipo;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $dolor_final;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $dolor_final_localizacion;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $dolor_final_tipo;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $lagrimeo;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $expresion;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $gusto;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $signo_bell;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $olfato;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $cicatriz;

    /**
     * @ORM\Column(type="string", length=19, nullable=true)
     */
    private $val_mus_fac_fecha;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_frontal_derecha_1;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_frontal_derecha_2;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_frontal_derecha_3;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_frontal_derecha_4;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_frontal_derecha_5;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_frontal_derecha_6;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_frontal_derecha_7;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_frontal_derecha_8;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_frontal_derecha_9;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_frontal_derecha_10;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_frontal_derecha_11;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_frontal_derecha_12;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_frontal_izquierda_1;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_frontal_izquierda_2;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_frontal_izquierda_3;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_frontal_izquierda_4;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_frontal_izquierda_5;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_frontal_izquierda_6;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_frontal_izquierda_7;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_frontal_izquierda_8;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_frontal_izquierda_9;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_frontal_izquierda_10;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_frontal_izquierda_11;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_frontal_izquierda_12;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_superciliar_derecha_1;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_superciliar_derecha_2;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_superciliar_derecha_3;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_superciliar_derecha_4;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_superciliar_derecha_5;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_superciliar_derecha_6;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_superciliar_derecha_7;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_superciliar_derecha_8;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_superciliar_derecha_9;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_superciliar_derecha_10;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_superciliar_derecha_11;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_superciliar_derecha_12;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_superciliar_izquierda_1;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_superciliar_izquierda_2;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_superciliar_izquierda_3;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_superciliar_izquierda_4;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_superciliar_izquierda_5;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_superciliar_izquierda_6;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_superciliar_izquierda_7;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_superciliar_izquierda_8;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_superciliar_izquierda_9;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_superciliar_izquierda_10;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_superciliar_izquierda_11;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_superciliar_izquierda_12;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_orbicular_ojos_derecha_1;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_orbicular_ojos_derecha_2;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_orbicular_ojos_derecha_3;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_orbicular_ojos_derecha_4;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_orbicular_ojos_derecha_5;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_orbicular_ojos_derecha_6;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_orbicular_ojos_derecha_7;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_orbicular_ojos_derecha_8;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_orbicular_ojos_derecha_9;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_orbicular_ojos_derecha_10;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_orbicular_ojos_derecha_11;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_orbicular_ojos_derecha_12;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_orbicular_ojos_izquierda_1;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_orbicular_ojos_izquierda_2;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_orbicular_ojos_izquierda_3;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_orbicular_ojos_izquierda_4;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_orbicular_ojos_izquierda_5;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_orbicular_ojos_izquierda_6;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_orbicular_ojos_izquierda_7;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_orbicular_ojos_izquierda_8;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_orbicular_ojos_izquierda_9;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_orbicular_ojos_izquierda_10;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_orbicular_ojos_izquierda_11;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_orbicular_ojos_izquierda_12;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_piramidal_nariz_derecha_1;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_piramidal_nariz_derecha_2;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_piramidal_nariz_derecha_3;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_piramidal_nariz_derecha_4;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_piramidal_nariz_derecha_5;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_piramidal_nariz_derecha_6;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_piramidal_nariz_derecha_7;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_piramidal_nariz_derecha_8;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_piramidal_nariz_derecha_9;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_piramidal_nariz_derecha_10;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_piramidal_nariz_derecha_11;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_piramidal_nariz_derecha_12;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_piramidal_nariz_izquierda_1;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_piramidal_nariz_izquierda_2;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_piramidal_nariz_izquierda_3;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_piramidal_nariz_izquierda_4;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_piramidal_nariz_izquierda_5;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_piramidal_nariz_izquierda_6;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_piramidal_nariz_izquierda_7;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_piramidal_nariz_izquierda_8;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_piramidal_nariz_izquierda_9;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_piramidal_nariz_izquierda_10;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_piramidal_nariz_izquierda_11;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_piramidal_nariz_izquierda_12;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_transverso_derecha_1;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_transverso_derecha_2;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_transverso_derecha_3;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_transverso_derecha_4;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_transverso_derecha_5;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_transverso_derecha_6;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_transverso_derecha_7;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_transverso_derecha_8;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_transverso_derecha_9;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_transverso_derecha_10;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_transverso_derecha_11;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_transverso_derecha_12;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_transverso_izquierda_1;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_transverso_izquierda_2;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_transverso_izquierda_3;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_transverso_izquierda_4;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_transverso_izquierda_5;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_transverso_izquierda_6;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_transverso_izquierda_7;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_transverso_izquierda_8;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_transverso_izquierda_9;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_transverso_izquierda_10;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_transverso_izquierda_11;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_transverso_izquierda_12;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_dilatador_derecha_1;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_dilatador_derecha_2;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_dilatador_derecha_3;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_dilatador_derecha_4;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_dilatador_derecha_5;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_dilatador_derecha_6;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_dilatador_derecha_7;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_dilatador_derecha_8;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_dilatador_derecha_9;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_dilatador_derecha_10;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_dilatador_derecha_11;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_dilatador_derecha_12;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_dilatador_izquierda_1;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_dilatador_izquierda_2;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_dilatador_izquierda_3;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_dilatador_izquierda_4;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_dilatador_izquierda_5;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_dilatador_izquierda_6;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_dilatador_izquierda_7;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_dilatador_izquierda_8;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_dilatador_izquierda_9;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_dilatador_izquierda_10;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_dilatador_izquierda_11;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_dilatador_izquierda_12;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_orbicular_labios_derecha_1;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_orbicular_labios_derecha_2;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_orbicular_labios_derecha_3;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_orbicular_labios_derecha_4;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_orbicular_labios_derecha_5;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_orbicular_labios_derecha_6;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_orbicular_labios_derecha_7;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_orbicular_labios_derecha_8;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_orbicular_labios_derecha_9;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_orbicular_labios_derecha_10;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_orbicular_labios_derecha_11;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_orbicular_labios_derecha_12;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_orbicular_labios_izquierda_1;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_orbicular_labios_izquierda_2;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_orbicular_labios_izquierda_3;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_orbicular_labios_izquierda_4;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_orbicular_labios_izquierda_5;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_orbicular_labios_izquierda_6;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_orbicular_labios_izquierda_7;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_orbicular_labios_izquierda_8;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_orbicular_labios_izquierda_9;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_orbicular_labios_izquierda_10;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_orbicular_labios_izquierda_11;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_orbicular_labios_izquierda_12;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_elevador_labio_superior_derecha_1;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_elevador_labio_superior_derecha_2;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_elevador_labio_superior_derecha_3;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_elevador_labio_superior_derecha_4;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_elevador_labio_superior_derecha_5;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_elevador_labio_superior_derecha_6;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_elevador_labio_superior_derecha_7;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_elevador_labio_superior_derecha_8;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_elevador_labio_superior_derecha_9;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_elevador_labio_superior_derecha_10;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_elevador_labio_superior_derecha_11;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_elevador_labio_superior_derecha_12;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_elevador_labio_superior_izquierda_1;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_elevador_labio_superior_izquierda_2;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_elevador_labio_superior_izquierda_3;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_elevador_labio_superior_izquierda_4;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_elevador_labio_superior_izquierda_5;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_elevador_labio_superior_izquierda_6;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_elevador_labio_superior_izquierda_7;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_elevador_labio_superior_izquierda_8;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_elevador_labio_superior_izquierda_9;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_elevador_labio_superior_izquierda_10;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_elevador_labio_superior_izquierda_11;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_elevador_labio_superior_izquierda_12;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_depresor_labio_superior_derecha_1;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_depresor_labio_superior_derecha_2;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_depresor_labio_superior_derecha_3;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_depresor_labio_superior_derecha_4;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_depresor_labio_superior_derecha_5;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_depresor_labio_superior_derecha_6;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_depresor_labio_superior_derecha_7;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_depresor_labio_superior_derecha_8;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_depresor_labio_superior_derecha_9;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_depresor_labio_superior_derecha_10;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_depresor_labio_superior_derecha_11;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_depresor_labio_superior_derecha_12;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_depresor_labio_superior_izquierda_1;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_depresor_labio_superior_izquierda_2;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_depresor_labio_superior_izquierda_3;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_depresor_labio_superior_izquierda_4;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_depresor_labio_superior_izquierda_5;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_depresor_labio_superior_izquierda_6;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_depresor_labio_superior_izquierda_7;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_depresor_labio_superior_izquierda_8;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_depresor_labio_superior_izquierda_9;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_depresor_labio_superior_izquierda_10;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_depresor_labio_superior_izquierda_11;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_depresor_labio_superior_izquierda_12;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_depresor_labio_inferior_derecha_1;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_depresor_labio_inferior_derecha_2;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_depresor_labio_inferior_derecha_3;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_depresor_labio_inferior_derecha_4;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_depresor_labio_inferior_derecha_5;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_depresor_labio_inferior_derecha_6;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_depresor_labio_inferior_derecha_7;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_depresor_labio_inferior_derecha_8;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_depresor_labio_inferior_derecha_9;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_depresor_labio_inferior_derecha_10;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_depresor_labio_inferior_derecha_11;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_depresor_labio_inferior_derecha_12;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_depresor_labio_inferior_izquierda_1;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_depresor_labio_inferior_izquierda_2;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_depresor_labio_inferior_izquierda_3;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_depresor_labio_inferior_izquierda_4;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_depresor_labio_inferior_izquierda_5;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_depresor_labio_inferior_izquierda_6;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_depresor_labio_inferior_izquierda_7;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_depresor_labio_inferior_izquierda_8;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_depresor_labio_inferior_izquierda_9;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_depresor_labio_inferior_izquierda_10;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_depresor_labio_inferior_izquierda_11;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_depresor_labio_inferior_izquierda_12;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_canino_derecha_1;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_canino_derecha_2;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_canino_derecha_3;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_canino_derecha_4;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_canino_derecha_5;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_canino_derecha_6;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_canino_derecha_7;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_canino_derecha_8;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_canino_derecha_9;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_canino_derecha_10;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_canino_derecha_11;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_canino_derecha_12;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_canino_izquierda_1;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_canino_izquierda_2;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_canino_izquierda_3;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_canino_izquierda_4;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_canino_izquierda_5;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_canino_izquierda_6;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_canino_izquierda_7;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_canino_izquierda_8;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_canino_izquierda_9;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_canino_izquierda_10;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_canino_izquierda_11;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_canino_izquierda_12;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_zigomatico_derecha_1;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_zigomatico_derecha_2;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_zigomatico_derecha_3;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_zigomatico_derecha_4;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_zigomatico_derecha_5;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_zigomatico_derecha_6;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_zigomatico_derecha_7;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_zigomatico_derecha_8;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_zigomatico_derecha_9;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_zigomatico_derecha_10;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_zigomatico_derecha_11;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_zigomatico_derecha_12;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_zigomatico_izquierda_1;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_zigomatico_izquierda_2;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_zigomatico_izquierda_3;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_zigomatico_izquierda_4;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_zigomatico_izquierda_5;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_zigomatico_izquierda_6;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_zigomatico_izquierda_7;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_zigomatico_izquierda_8;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_zigomatico_izquierda_9;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_zigomatico_izquierda_10;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_zigomatico_izquierda_11;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_zigomatico_izquierda_12;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_risorio_derecha_1;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_risorio_derecha_2;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_risorio_derecha_3;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_risorio_derecha_4;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_risorio_derecha_5;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_risorio_derecha_6;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_risorio_derecha_7;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_risorio_derecha_8;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_risorio_derecha_9;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_risorio_derecha_10;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_risorio_derecha_11;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_risorio_derecha_12;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_risorio_izquierda_1;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_risorio_izquierda_2;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_risorio_izquierda_3;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_risorio_izquierda_4;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_risorio_izquierda_5;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_risorio_izquierda_6;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_risorio_izquierda_7;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_risorio_izquierda_8;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_risorio_izquierda_9;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_risorio_izquierda_10;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_risorio_izquierda_11;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_risorio_izquierda_12;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_buccinador_derecha_1;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_buccinador_derecha_2;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_buccinador_derecha_3;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_buccinador_derecha_4;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_buccinador_derecha_5;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_buccinador_derecha_6;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_buccinador_derecha_7;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_buccinador_derecha_8;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_buccinador_derecha_9;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_buccinador_derecha_10;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_buccinador_derecha_11;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_buccinador_derecha_12;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_buccinador_izquierda_1;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_buccinador_izquierda_2;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_buccinador_izquierda_3;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_buccinador_izquierda_4;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_buccinador_izquierda_5;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_buccinador_izquierda_6;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_buccinador_izquierda_7;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_buccinador_izquierda_8;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_buccinador_izquierda_9;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_buccinador_izquierda_10;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_buccinador_izquierda_11;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_buccinador_izquierda_12;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_cuadro_menton_derecha_1;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_cuadro_menton_derecha_2;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_cuadro_menton_derecha_3;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_cuadro_menton_derecha_4;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_cuadro_menton_derecha_5;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_cuadro_menton_derecha_6;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_cuadro_menton_derecha_7;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_cuadro_menton_derecha_8;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_cuadro_menton_derecha_9;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_cuadro_menton_derecha_10;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_cuadro_menton_derecha_11;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_cuadro_menton_derecha_12;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_cuadro_menton_izquierda_1;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_cuadro_menton_izquierda_2;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_cuadro_menton_izquierda_3;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_cuadro_menton_izquierda_4;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_cuadro_menton_izquierda_5;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_cuadro_menton_izquierda_6;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_cuadro_menton_izquierda_7;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_cuadro_menton_izquierda_8;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_cuadro_menton_izquierda_9;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_cuadro_menton_izquierda_10;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_cuadro_menton_izquierda_11;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_cuadro_menton_izquierda_12;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_cutaneo_derecha_1;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_cutaneo_derecha_2;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_cutaneo_derecha_3;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_cutaneo_derecha_4;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_cutaneo_derecha_5;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_cutaneo_derecha_6;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_cutaneo_derecha_7;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_cutaneo_derecha_8;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_cutaneo_derecha_9;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_cutaneo_derecha_10;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_cutaneo_derecha_11;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_cutaneo_derecha_12;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_cutaneo_izquierda_1;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_cutaneo_izquierda_2;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_cutaneo_izquierda_3;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_cutaneo_izquierda_4;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_cutaneo_izquierda_5;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_cutaneo_izquierda_6;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_cutaneo_izquierda_7;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_cutaneo_izquierda_8;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_cutaneo_izquierda_9;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_cutaneo_izquierda_10;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_cutaneo_izquierda_11;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $val_mus_fac_cutaneo_izquierda_12;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $tratamiento_frio;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $tratamiento_calor;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $tratamiento_ultrasonido;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $tratamiento_tens;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $tratamiento_toques_hielo;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $tratamiento_estimulacion;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $masajes_sedativo;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $masajes_hielo;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $tecn_facil_kabbat;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $tecn_facil_bobath;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $ejercicios_pasivos;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $ejercicios_activos;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $ejercicios_activos_asistidos;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $ejercicios_activos_resistidos;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $ejercicios_isometricos;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $objetivos_tratamiento;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $resumen_final_tratamiento;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(string $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getDolorInicial(): ?string
    {
        return $this->dolor_inicial;
    }

    public function setDolorInicial(?string $dolor_inicial): self
    {
        $this->dolor_inicial = $dolor_inicial;

        return $this;
    }

    public function getDolorInicialLocalizacion(): ?string
    {
        return $this->dolor_inicial_localizacion;
    }

    public function setDolorInicialLocalizacion(?string $dolor_inicial_localizacion): self
    {
        $this->dolor_inicial_localizacion = $dolor_inicial_localizacion;

        return $this;
    }

    public function getDolorInicialTipo(): ?string
    {
        return $this->dolor_inicial_tipo;
    }

    public function setDolorInicialTipo(?string $dolor_inicial_tipo): self
    {
        $this->dolor_inicial_tipo = $dolor_inicial_tipo;

        return $this;
    }

    public function getDolorFinal(): ?string
    {
        return $this->dolor_final;
    }

    public function setDolorFinal(?string $dolor_final): self
    {
        $this->dolor_final = $dolor_final;

        return $this;
    }

    public function getDolorFinalLocalizacion(): ?string
    {
        return $this->dolor_final_localizacion;
    }

    public function setDolorFinalLocalizacion(?string $dolor_final_localizacion): self
    {
        $this->dolor_final_localizacion = $dolor_final_localizacion;

        return $this;
    }

    public function getDolorFinalTipo(): ?string
    {
        return $this->dolor_final_tipo;
    }

    public function setDolorFinalTipo(?string $dolor_final_tipo): self
    {
        $this->dolor_final_tipo = $dolor_final_tipo;

        return $this;
    }

    public function getLagrimeo(): ?string
    {
        return $this->lagrimeo;
    }

    public function setLagrimeo(?string $lagrimeo): self
    {
        $this->lagrimeo = $lagrimeo;

        return $this;
    }

    public function getExpresion(): ?string
    {
        return $this->expresion;
    }

    public function setExpresion(?string $expresion): self
    {
        $this->expresion = $expresion;

        return $this;
    }

    public function getGusto(): ?string
    {
        return $this->gusto;
    }

    public function setGusto(?string $gusto): self
    {
        $this->gusto = $gusto;

        return $this;
    }

    public function getSignoBell(): ?string
    {
        return $this->signo_bell;
    }

    public function setSignoBell(?string $signo_bell): self
    {
        $this->signo_bell = $signo_bell;

        return $this;
    }

    public function getOlfato(): ?string
    {
        return $this->olfato;
    }

    public function setOlfato(?string $olfato): self
    {
        $this->olfato = $olfato;

        return $this;
    }

    public function getCicatriz(): ?string
    {
        return $this->cicatriz;
    }

    public function setCicatriz(?string $cicatriz): self
    {
        $this->cicatriz = $cicatriz;

        return $this;
    }

    public function getValMusFacFecha(): ?string
    {
        return $this->val_mus_fac_fecha;
    }

    public function setValMusFacFecha(?string $val_mus_fac_fecha): self
    {
        $this->val_mus_fac_fecha = $val_mus_fac_fecha;

        return $this;
    }

    public function getValMusFacFrontalDerecha1(): ?string
    {
        return $this->val_mus_fac_frontal_derecha_1;
    }

    public function setValMusFacFrontalDerecha1(?string $val_mus_fac_frontal_derecha_1): self
    {
        $this->val_mus_fac_frontal_derecha_1 = $val_mus_fac_frontal_derecha_1;

        return $this;
    }

    public function getValMusFacFrontalDerecha2(): ?string
    {
        return $this->val_mus_fac_frontal_derecha_2;
    }

    public function setValMusFacFrontalDerecha2(?string $val_mus_fac_frontal_derecha_2): self
    {
        $this->val_mus_fac_frontal_derecha_2 = $val_mus_fac_frontal_derecha_2;

        return $this;
    }

    public function getValMusFacFrontalDerecha3(): ?string
    {
        return $this->val_mus_fac_frontal_derecha_3;
    }

    public function setValMusFacFrontalDerecha3(?string $val_mus_fac_frontal_derecha_3): self
    {
        $this->val_mus_fac_frontal_derecha_3 = $val_mus_fac_frontal_derecha_3;

        return $this;
    }

    public function getValMusFacFrontalDerecha4(): ?string
    {
        return $this->val_mus_fac_frontal_derecha_4;
    }

    public function setValMusFacFrontalDerecha4(?string $val_mus_fac_frontal_derecha_4): self
    {
        $this->val_mus_fac_frontal_derecha_4 = $val_mus_fac_frontal_derecha_4;

        return $this;
    }

    public function getValMusFacFrontalDerecha5(): ?string
    {
        return $this->val_mus_fac_frontal_derecha_5;
    }

    public function setValMusFacFrontalDerecha5(?string $val_mus_fac_frontal_derecha_5): self
    {
        $this->val_mus_fac_frontal_derecha_5 = $val_mus_fac_frontal_derecha_5;

        return $this;
    }

    public function getValMusFacFrontalDerecha6(): ?string
    {
        return $this->val_mus_fac_frontal_derecha_6;
    }

    public function setValMusFacFrontalDerecha6(?string $val_mus_fac_frontal_derecha_6): self
    {
        $this->val_mus_fac_frontal_derecha_6 = $val_mus_fac_frontal_derecha_6;

        return $this;
    }

    public function getValMusFacFrontalDerecha7(): ?string
    {
        return $this->val_mus_fac_frontal_derecha_7;
    }

    public function setValMusFacFrontalDerecha7(?string $val_mus_fac_frontal_derecha_7): self
    {
        $this->val_mus_fac_frontal_derecha_7 = $val_mus_fac_frontal_derecha_7;

        return $this;
    }

    public function getValMusFacFrontalDerecha8(): ?string
    {
        return $this->val_mus_fac_frontal_derecha_8;
    }

    public function setValMusFacFrontalDerecha8(?string $val_mus_fac_frontal_derecha_8): self
    {
        $this->val_mus_fac_frontal_derecha_8 = $val_mus_fac_frontal_derecha_8;

        return $this;
    }

    public function getValMusFacFrontalDerecha9(): ?string
    {
        return $this->val_mus_fac_frontal_derecha_9;
    }

    public function setValMusFacFrontalDerecha9(?string $val_mus_fac_frontal_derecha_9): self
    {
        $this->val_mus_fac_frontal_derecha_9 = $val_mus_fac_frontal_derecha_9;

        return $this;
    }

    public function getValMusFacFrontalDerecha10(): ?string
    {
        return $this->val_mus_fac_frontal_derecha_10;
    }

    public function setValMusFacFrontalDerecha10(?string $val_mus_fac_frontal_derecha_10): self
    {
        $this->val_mus_fac_frontal_derecha_10 = $val_mus_fac_frontal_derecha_10;

        return $this;
    }

    public function getValMusFacFrontalDerecha11(): ?string
    {
        return $this->val_mus_fac_frontal_derecha_11;
    }

    public function setValMusFacFrontalDerecha11(?string $val_mus_fac_frontal_derecha_11): self
    {
        $this->val_mus_fac_frontal_derecha_11 = $val_mus_fac_frontal_derecha_11;

        return $this;
    }

    public function getValMusFacFrontalDerecha12(): ?string
    {
        return $this->val_mus_fac_frontal_derecha_12;
    }

    public function setValMusFacFrontalDerecha12(?string $val_mus_fac_frontal_derecha_12): self
    {
        $this->val_mus_fac_frontal_derecha_12 = $val_mus_fac_frontal_derecha_12;

        return $this;
    }

    public function getValMusFacFrontalIzquierda1(): ?string
    {
        return $this->val_mus_fac_frontal_izquierda_1;
    }

    public function setValMusFacFrontalIzquierda1(?string $val_mus_fac_frontal_izquierda_1): self
    {
        $this->val_mus_fac_frontal_izquierda_1 = $val_mus_fac_frontal_izquierda_1;

        return $this;
    }

    public function getValMusFacFrontalIzquierda2(): ?string
    {
        return $this->val_mus_fac_frontal_izquierda_2;
    }

    public function setValMusFacFrontalIzquierda2(?string $val_mus_fac_frontal_izquierda_2): self
    {
        $this->val_mus_fac_frontal_izquierda_2 = $val_mus_fac_frontal_izquierda_2;

        return $this;
    }

    public function getValMusFacFrontalIzquierda3(): ?string
    {
        return $this->val_mus_fac_frontal_izquierda_3;
    }

    public function setValMusFacFrontalIzquierda3(?string $val_mus_fac_frontal_izquierda_3): self
    {
        $this->val_mus_fac_frontal_izquierda_3 = $val_mus_fac_frontal_izquierda_3;

        return $this;
    }

    public function getValMusFacFrontalIzquierda4(): ?string
    {
        return $this->val_mus_fac_frontal_izquierda_4;
    }

    public function setValMusFacFrontalIzquierda4(?string $val_mus_fac_frontal_izquierda_4): self
    {
        $this->val_mus_fac_frontal_izquierda_4 = $val_mus_fac_frontal_izquierda_4;

        return $this;
    }

    public function getValMusFacFrontalIzquierda5(): ?string
    {
        return $this->val_mus_fac_frontal_izquierda_5;
    }

    public function setValMusFacFrontalIzquierda5(?string $val_mus_fac_frontal_izquierda_5): self
    {
        $this->val_mus_fac_frontal_izquierda_5 = $val_mus_fac_frontal_izquierda_5;

        return $this;
    }

    public function getValMusFacFrontalIzquierda6(): ?string
    {
        return $this->val_mus_fac_frontal_izquierda_6;
    }

    public function setValMusFacFrontalIzquierda6(?string $val_mus_fac_frontal_izquierda_6): self
    {
        $this->val_mus_fac_frontal_izquierda_6 = $val_mus_fac_frontal_izquierda_6;

        return $this;
    }

    public function getValMusFacFrontalIzquierda7(): ?string
    {
        return $this->val_mus_fac_frontal_izquierda_7;
    }

    public function setValMusFacFrontalIzquierda7(?string $val_mus_fac_frontal_izquierda_7): self
    {
        $this->val_mus_fac_frontal_izquierda_7 = $val_mus_fac_frontal_izquierda_7;

        return $this;
    }

    public function getValMusFacFrontalIzquierda8(): ?string
    {
        return $this->val_mus_fac_frontal_izquierda_8;
    }

    public function setValMusFacFrontalIzquierda8(?string $val_mus_fac_frontal_izquierda_8): self
    {
        $this->val_mus_fac_frontal_izquierda_8 = $val_mus_fac_frontal_izquierda_8;

        return $this;
    }

    public function getValMusFacFrontalIzquierda9(): ?string
    {
        return $this->val_mus_fac_frontal_izquierda_9;
    }

    public function setValMusFacFrontalIzquierda9(?string $val_mus_fac_frontal_izquierda_9): self
    {
        $this->val_mus_fac_frontal_izquierda_9 = $val_mus_fac_frontal_izquierda_9;

        return $this;
    }

    public function getValMusFacFrontalIzquierda10(): ?string
    {
        return $this->val_mus_fac_frontal_izquierda_10;
    }

    public function setValMusFacFrontalIzquierda10(?string $val_mus_fac_frontal_izquierda_10): self
    {
        $this->val_mus_fac_frontal_izquierda_10 = $val_mus_fac_frontal_izquierda_10;

        return $this;
    }

    public function getValMusFacFrontalIzquierda11(): ?string
    {
        return $this->val_mus_fac_frontal_izquierda_11;
    }

    public function setValMusFacFrontalIzquierda11(?string $val_mus_fac_frontal_izquierda_11): self
    {
        $this->val_mus_fac_frontal_izquierda_11 = $val_mus_fac_frontal_izquierda_11;

        return $this;
    }

    public function getValMusFacFrontalIzquierda12(): ?string
    {
        return $this->val_mus_fac_frontal_izquierda_12;
    }

    public function setValMusFacFrontalIzquierda12(?string $val_mus_fac_frontal_izquierda_12): self
    {
        $this->val_mus_fac_frontal_izquierda_12 = $val_mus_fac_frontal_izquierda_12;

        return $this;
    }

    public function getValMusFacSuperciliarDerecha1(): ?string
    {
        return $this->val_mus_fac_superciliar_derecha_1;
    }

    public function setValMusFacSuperciliarDerecha1(?string $val_mus_fac_superciliar_derecha_1): self
    {
        $this->val_mus_fac_superciliar_derecha_1 = $val_mus_fac_superciliar_derecha_1;

        return $this;
    }

    public function getValMusFacSuperciliarDerecha2(): ?string
    {
        return $this->val_mus_fac_superciliar_derecha_2;
    }

    public function setValMusFacSuperciliarDerecha2(?string $val_mus_fac_superciliar_derecha_2): self
    {
        $this->val_mus_fac_superciliar_derecha_2 = $val_mus_fac_superciliar_derecha_2;

        return $this;
    }

    public function getValMusFacSuperciliarDerecha3(): ?string
    {
        return $this->val_mus_fac_superciliar_derecha_3;
    }

    public function setValMusFacSuperciliarDerecha3(?string $val_mus_fac_superciliar_derecha_3): self
    {
        $this->val_mus_fac_superciliar_derecha_3 = $val_mus_fac_superciliar_derecha_3;

        return $this;
    }

    public function getValMusFacSuperciliarDerecha4(): ?string
    {
        return $this->val_mus_fac_superciliar_derecha_4;
    }

    public function setValMusFacSuperciliarDerecha4(?string $val_mus_fac_superciliar_derecha_4): self
    {
        $this->val_mus_fac_superciliar_derecha_4 = $val_mus_fac_superciliar_derecha_4;

        return $this;
    }

    public function getValMusFacSuperciliarDerecha5(): ?string
    {
        return $this->val_mus_fac_superciliar_derecha_5;
    }

    public function setValMusFacSuperciliarDerecha5(?string $val_mus_fac_superciliar_derecha_5): self
    {
        $this->val_mus_fac_superciliar_derecha_5 = $val_mus_fac_superciliar_derecha_5;

        return $this;
    }

    public function getValMusFacSuperciliarDerecha6(): ?string
    {
        return $this->val_mus_fac_superciliar_derecha_6;
    }

    public function setValMusFacSuperciliarDerecha6(?string $val_mus_fac_superciliar_derecha_6): self
    {
        $this->val_mus_fac_superciliar_derecha_6 = $val_mus_fac_superciliar_derecha_6;

        return $this;
    }

    public function getValMusFacSuperciliarDerecha7(): ?string
    {
        return $this->val_mus_fac_superciliar_derecha_7;
    }

    public function setValMusFacSuperciliarDerecha7(?string $val_mus_fac_superciliar_derecha_7): self
    {
        $this->val_mus_fac_superciliar_derecha_7 = $val_mus_fac_superciliar_derecha_7;

        return $this;
    }

    public function getValMusFacSuperciliarDerecha8(): ?string
    {
        return $this->val_mus_fac_superciliar_derecha_8;
    }

    public function setValMusFacSuperciliarDerecha8(?string $val_mus_fac_superciliar_derecha_8): self
    {
        $this->val_mus_fac_superciliar_derecha_8 = $val_mus_fac_superciliar_derecha_8;

        return $this;
    }

    public function getValMusFacSuperciliarDerecha9(): ?string
    {
        return $this->val_mus_fac_superciliar_derecha_9;
    }

    public function setValMusFacSuperciliarDerecha9(?string $val_mus_fac_superciliar_derecha_9): self
    {
        $this->val_mus_fac_superciliar_derecha_9 = $val_mus_fac_superciliar_derecha_9;

        return $this;
    }

    public function getValMusFacSuperciliarDerecha10(): ?string
    {
        return $this->val_mus_fac_superciliar_derecha_10;
    }

    public function setValMusFacSuperciliarDerecha10(?string $val_mus_fac_superciliar_derecha_10): self
    {
        $this->val_mus_fac_superciliar_derecha_10 = $val_mus_fac_superciliar_derecha_10;

        return $this;
    }

    public function getValMusFacSuperciliarDerecha11(): ?string
    {
        return $this->val_mus_fac_superciliar_derecha_11;
    }

    public function setValMusFacSuperciliarDerecha11(?string $val_mus_fac_superciliar_derecha_11): self
    {
        $this->val_mus_fac_superciliar_derecha_11 = $val_mus_fac_superciliar_derecha_11;

        return $this;
    }

    public function getValMusFacSuperciliarDerecha12(): ?string
    {
        return $this->val_mus_fac_superciliar_derecha_12;
    }

    public function setValMusFacSuperciliarDerecha12(?string $val_mus_fac_superciliar_derecha_12): self
    {
        $this->val_mus_fac_superciliar_derecha_12 = $val_mus_fac_superciliar_derecha_12;

        return $this;
    }

    public function getValMusFacSuperciliarIzquierda1(): ?string
    {
        return $this->val_mus_fac_superciliar_izquierda_1;
    }

    public function setValMusFacSuperciliarIzquierda1(?string $val_mus_fac_superciliar_izquierda_1): self
    {
        $this->val_mus_fac_superciliar_izquierda_1 = $val_mus_fac_superciliar_izquierda_1;

        return $this;
    }

    public function getValMusFacSuperciliarIzquierda2(): ?string
    {
        return $this->val_mus_fac_superciliar_izquierda_2;
    }

    public function setValMusFacSuperciliarIzquierda2(?string $val_mus_fac_superciliar_izquierda_2): self
    {
        $this->val_mus_fac_superciliar_izquierda_2 = $val_mus_fac_superciliar_izquierda_2;

        return $this;
    }

    public function getValMusFacSuperciliarIzquierda3(): ?string
    {
        return $this->val_mus_fac_superciliar_izquierda_3;
    }

    public function setValMusFacSuperciliarIzquierda3(?string $val_mus_fac_superciliar_izquierda_3): self
    {
        $this->val_mus_fac_superciliar_izquierda_3 = $val_mus_fac_superciliar_izquierda_3;

        return $this;
    }

    public function getValMusFacSuperciliarIzquierda4(): ?string
    {
        return $this->val_mus_fac_superciliar_izquierda_4;
    }

    public function setValMusFacSuperciliarIzquierda4(?string $val_mus_fac_superciliar_izquierda_4): self
    {
        $this->val_mus_fac_superciliar_izquierda_4 = $val_mus_fac_superciliar_izquierda_4;

        return $this;
    }

    public function getValMusFacSuperciliarIzquierda5(): ?string
    {
        return $this->val_mus_fac_superciliar_izquierda_5;
    }

    public function setValMusFacSuperciliarIzquierda5(?string $val_mus_fac_superciliar_izquierda_5): self
    {
        $this->val_mus_fac_superciliar_izquierda_5 = $val_mus_fac_superciliar_izquierda_5;

        return $this;
    }

    public function getValMusFacSuperciliarIzquierda6(): ?string
    {
        return $this->val_mus_fac_superciliar_izquierda_6;
    }

    public function setValMusFacSuperciliarIzquierda6(?string $val_mus_fac_superciliar_izquierda_6): self
    {
        $this->val_mus_fac_superciliar_izquierda_6 = $val_mus_fac_superciliar_izquierda_6;

        return $this;
    }

    public function getValMusFacSuperciliarIzquierda7(): ?string
    {
        return $this->val_mus_fac_superciliar_izquierda_7;
    }

    public function setValMusFacSuperciliarIzquierda7(?string $val_mus_fac_superciliar_izquierda_7): self
    {
        $this->val_mus_fac_superciliar_izquierda_7 = $val_mus_fac_superciliar_izquierda_7;

        return $this;
    }

    public function getValMusFacSuperciliarIzquierda8(): ?string
    {
        return $this->val_mus_fac_superciliar_izquierda_8;
    }

    public function setValMusFacSuperciliarIzquierda8(?string $val_mus_fac_superciliar_izquierda_8): self
    {
        $this->val_mus_fac_superciliar_izquierda_8 = $val_mus_fac_superciliar_izquierda_8;

        return $this;
    }

    public function getValMusFacSuperciliarIzquierda9(): ?string
    {
        return $this->val_mus_fac_superciliar_izquierda_9;
    }

    public function setValMusFacSuperciliarIzquierda9(?string $val_mus_fac_superciliar_izquierda_9): self
    {
        $this->val_mus_fac_superciliar_izquierda_9 = $val_mus_fac_superciliar_izquierda_9;

        return $this;
    }

    public function getValMusFacSuperciliarIzquierda10(): ?string
    {
        return $this->val_mus_fac_superciliar_izquierda_10;
    }

    public function setValMusFacSuperciliarIzquierda10(?string $val_mus_fac_superciliar_izquierda_10): self
    {
        $this->val_mus_fac_superciliar_izquierda_10 = $val_mus_fac_superciliar_izquierda_10;

        return $this;
    }

    public function getValMusFacSuperciliarIzquierda11(): ?string
    {
        return $this->val_mus_fac_superciliar_izquierda_11;
    }

    public function setValMusFacSuperciliarIzquierda11(?string $val_mus_fac_superciliar_izquierda_11): self
    {
        $this->val_mus_fac_superciliar_izquierda_11 = $val_mus_fac_superciliar_izquierda_11;

        return $this;
    }

    public function getValMusFacSuperciliarIzquierda12(): ?string
    {
        return $this->val_mus_fac_superciliar_izquierda_12;
    }

    public function setValMusFacSuperciliarIzquierda12(?string $val_mus_fac_superciliar_izquierda_12): self
    {
        $this->val_mus_fac_superciliar_izquierda_12 = $val_mus_fac_superciliar_izquierda_12;

        return $this;
    }

    public function getValMusFacOrbicularOjosDerecha1(): ?string
    {
        return $this->val_mus_fac_orbicular_ojos_derecha_1;
    }

    public function setValMusFacOrbicularOjosDerecha1(?string $val_mus_fac_orbicular_ojos_derecha_1): self
    {
        $this->val_mus_fac_orbicular_ojos_derecha_1 = $val_mus_fac_orbicular_ojos_derecha_1;

        return $this;
    }

    public function getValMusFacOrbicularOjosDerecha2(): ?string
    {
        return $this->val_mus_fac_orbicular_ojos_derecha_2;
    }

    public function setValMusFacOrbicularOjosDerecha2(?string $val_mus_fac_orbicular_ojos_derecha_2): self
    {
        $this->val_mus_fac_orbicular_ojos_derecha_2 = $val_mus_fac_orbicular_ojos_derecha_2;

        return $this;
    }

    public function getValMusFacOrbicularOjosDerecha3(): ?string
    {
        return $this->val_mus_fac_orbicular_ojos_derecha_3;
    }

    public function setValMusFacOrbicularOjosDerecha3(?string $val_mus_fac_orbicular_ojos_derecha_3): self
    {
        $this->val_mus_fac_orbicular_ojos_derecha_3 = $val_mus_fac_orbicular_ojos_derecha_3;

        return $this;
    }

    public function getValMusFacOrbicularOjosDerecha4(): ?string
    {
        return $this->val_mus_fac_orbicular_ojos_derecha_4;
    }

    public function setValMusFacOrbicularOjosDerecha4(?string $val_mus_fac_orbicular_ojos_derecha_4): self
    {
        $this->val_mus_fac_orbicular_ojos_derecha_4 = $val_mus_fac_orbicular_ojos_derecha_4;

        return $this;
    }

    public function getValMusFacOrbicularOjosDerecha5(): ?string
    {
        return $this->val_mus_fac_orbicular_ojos_derecha_5;
    }

    public function setValMusFacOrbicularOjosDerecha5(?string $val_mus_fac_orbicular_ojos_derecha_5): self
    {
        $this->val_mus_fac_orbicular_ojos_derecha_5 = $val_mus_fac_orbicular_ojos_derecha_5;

        return $this;
    }

    public function getValMusFacOrbicularOjosDerecha6(): ?string
    {
        return $this->val_mus_fac_orbicular_ojos_derecha_6;
    }

    public function setValMusFacOrbicularOjosDerecha6(?string $val_mus_fac_orbicular_ojos_derecha_6): self
    {
        $this->val_mus_fac_orbicular_ojos_derecha_6 = $val_mus_fac_orbicular_ojos_derecha_6;

        return $this;
    }

    public function getValMusFacOrbicularOjosDerecha7(): ?string
    {
        return $this->val_mus_fac_orbicular_ojos_derecha_7;
    }

    public function setValMusFacOrbicularOjosDerecha7(?string $val_mus_fac_orbicular_ojos_derecha_7): self
    {
        $this->val_mus_fac_orbicular_ojos_derecha_7 = $val_mus_fac_orbicular_ojos_derecha_7;

        return $this;
    }

    public function getValMusFacOrbicularOjosDerecha8(): ?string
    {
        return $this->val_mus_fac_orbicular_ojos_derecha_8;
    }

    public function setValMusFacOrbicularOjosDerecha8(?string $val_mus_fac_orbicular_ojos_derecha_8): self
    {
        $this->val_mus_fac_orbicular_ojos_derecha_8 = $val_mus_fac_orbicular_ojos_derecha_8;

        return $this;
    }

    public function getValMusFacOrbicularOjosDerecha9(): ?string
    {
        return $this->val_mus_fac_orbicular_ojos_derecha_9;
    }

    public function setValMusFacOrbicularOjosDerecha9(?string $val_mus_fac_orbicular_ojos_derecha_9): self
    {
        $this->val_mus_fac_orbicular_ojos_derecha_9 = $val_mus_fac_orbicular_ojos_derecha_9;

        return $this;
    }

    public function getValMusFacOrbicularOjosDerecha10(): ?string
    {
        return $this->val_mus_fac_orbicular_ojos_derecha_10;
    }

    public function setValMusFacOrbicularOjosDerecha10(?string $val_mus_fac_orbicular_ojos_derecha_10): self
    {
        $this->val_mus_fac_orbicular_ojos_derecha_10 = $val_mus_fac_orbicular_ojos_derecha_10;

        return $this;
    }

    public function getValMusFacOrbicularOjosDerecha11(): ?string
    {
        return $this->val_mus_fac_orbicular_ojos_derecha_11;
    }

    public function setValMusFacOrbicularOjosDerecha11(?string $val_mus_fac_orbicular_ojos_derecha_11): self
    {
        $this->val_mus_fac_orbicular_ojos_derecha_11 = $val_mus_fac_orbicular_ojos_derecha_11;

        return $this;
    }

    public function getValMusFacOrbicularOjosDerecha12(): ?string
    {
        return $this->val_mus_fac_orbicular_ojos_derecha_12;
    }

    public function setValMusFacOrbicularOjosDerecha12(?string $val_mus_fac_orbicular_ojos_derecha_12): self
    {
        $this->val_mus_fac_orbicular_ojos_derecha_12 = $val_mus_fac_orbicular_ojos_derecha_12;

        return $this;
    }

    public function getValMusFacOrbicularOjosIzquierda1(): ?string
    {
        return $this->val_mus_fac_orbicular_ojos_izquierda_1;
    }

    public function setValMusFacOrbicularOjosIzquierda1(?string $val_mus_fac_orbicular_ojos_izquierda_1): self
    {
        $this->val_mus_fac_orbicular_ojos_izquierda_1 = $val_mus_fac_orbicular_ojos_izquierda_1;

        return $this;
    }

    public function getValMusFacOrbicularOjosIzquierda2(): ?string
    {
        return $this->val_mus_fac_orbicular_ojos_izquierda_2;
    }

    public function setValMusFacOrbicularOjosIzquierda2(?string $val_mus_fac_orbicular_ojos_izquierda_2): self
    {
        $this->val_mus_fac_orbicular_ojos_izquierda_2 = $val_mus_fac_orbicular_ojos_izquierda_2;

        return $this;
    }

    public function getValMusFacOrbicularOjosIzquierda3(): ?string
    {
        return $this->val_mus_fac_orbicular_ojos_izquierda_3;
    }

    public function setValMusFacOrbicularOjosIzquierda3(?string $val_mus_fac_orbicular_ojos_izquierda_3): self
    {
        $this->val_mus_fac_orbicular_ojos_izquierda_3 = $val_mus_fac_orbicular_ojos_izquierda_3;

        return $this;
    }

    public function getValMusFacOrbicularOjosIzquierda4(): ?string
    {
        return $this->val_mus_fac_orbicular_ojos_izquierda_4;
    }

    public function setValMusFacOrbicularOjosIzquierda4(?string $val_mus_fac_orbicular_ojos_izquierda_4): self
    {
        $this->val_mus_fac_orbicular_ojos_izquierda_4 = $val_mus_fac_orbicular_ojos_izquierda_4;

        return $this;
    }

    public function getValMusFacOrbicularOjosIzquierda5(): ?string
    {
        return $this->val_mus_fac_orbicular_ojos_izquierda_5;
    }

    public function setValMusFacOrbicularOjosIzquierda5(?string $val_mus_fac_orbicular_ojos_izquierda_5): self
    {
        $this->val_mus_fac_orbicular_ojos_izquierda_5 = $val_mus_fac_orbicular_ojos_izquierda_5;

        return $this;
    }

    public function getValMusFacOrbicularOjosIzquierda6(): ?string
    {
        return $this->val_mus_fac_orbicular_ojos_izquierda_6;
    }

    public function setValMusFacOrbicularOjosIzquierda6(?string $val_mus_fac_orbicular_ojos_izquierda_6): self
    {
        $this->val_mus_fac_orbicular_ojos_izquierda_6 = $val_mus_fac_orbicular_ojos_izquierda_6;

        return $this;
    }

    public function getValMusFacOrbicularOjosIzquierda7(): ?string
    {
        return $this->val_mus_fac_orbicular_ojos_izquierda_7;
    }

    public function setValMusFacOrbicularOjosIzquierda7(?string $val_mus_fac_orbicular_ojos_izquierda_7): self
    {
        $this->val_mus_fac_orbicular_ojos_izquierda_7 = $val_mus_fac_orbicular_ojos_izquierda_7;

        return $this;
    }

    public function getValMusFacOrbicularOjosIzquierda8(): ?string
    {
        return $this->val_mus_fac_orbicular_ojos_izquierda_8;
    }

    public function setValMusFacOrbicularOjosIzquierda8(?string $val_mus_fac_orbicular_ojos_izquierda_8): self
    {
        $this->val_mus_fac_orbicular_ojos_izquierda_8 = $val_mus_fac_orbicular_ojos_izquierda_8;

        return $this;
    }

    public function getValMusFacOrbicularOjosIzquierda9(): ?string
    {
        return $this->val_mus_fac_orbicular_ojos_izquierda_9;
    }

    public function setValMusFacOrbicularOjosIzquierda9(?string $val_mus_fac_orbicular_ojos_izquierda_9): self
    {
        $this->val_mus_fac_orbicular_ojos_izquierda_9 = $val_mus_fac_orbicular_ojos_izquierda_9;

        return $this;
    }

    public function getValMusFacOrbicularOjosIzquierda10(): ?string
    {
        return $this->val_mus_fac_orbicular_ojos_izquierda_10;
    }

    public function setValMusFacOrbicularOjosIzquierda10(?string $val_mus_fac_orbicular_ojos_izquierda_10): self
    {
        $this->val_mus_fac_orbicular_ojos_izquierda_10 = $val_mus_fac_orbicular_ojos_izquierda_10;

        return $this;
    }

    public function getValMusFacOrbicularOjosIzquierda11(): ?string
    {
        return $this->val_mus_fac_orbicular_ojos_izquierda_11;
    }

    public function setValMusFacOrbicularOjosIzquierda11(?string $val_mus_fac_orbicular_ojos_izquierda_11): self
    {
        $this->val_mus_fac_orbicular_ojos_izquierda_11 = $val_mus_fac_orbicular_ojos_izquierda_11;

        return $this;
    }

    public function getValMusFacOrbicularOjosIzquierda12(): ?string
    {
        return $this->val_mus_fac_orbicular_ojos_izquierda_12;
    }

    public function setValMusFacOrbicularOjosIzquierda12(?string $val_mus_fac_orbicular_ojos_izquierda_12): self
    {
        $this->val_mus_fac_orbicular_ojos_izquierda_12 = $val_mus_fac_orbicular_ojos_izquierda_12;

        return $this;
    }

    public function getValMusFacPiramidalNarizDerecha1(): ?string
    {
        return $this->val_mus_fac_piramidal_nariz_derecha_1;
    }

    public function setValMusFacPiramidalNarizDerecha1(?string $val_mus_fac_piramidal_nariz_derecha_1): self
    {
        $this->val_mus_fac_piramidal_nariz_derecha_1 = $val_mus_fac_piramidal_nariz_derecha_1;

        return $this;
    }

    public function getValMusFacPiramidalNarizDerecha2(): ?string
    {
        return $this->val_mus_fac_piramidal_nariz_derecha_2;
    }

    public function setValMusFacPiramidalNarizDerecha2(?string $val_mus_fac_piramidal_nariz_derecha_2): self
    {
        $this->val_mus_fac_piramidal_nariz_derecha_2 = $val_mus_fac_piramidal_nariz_derecha_2;

        return $this;
    }

    public function getValMusFacPiramidalNarizDerecha3(): ?string
    {
        return $this->val_mus_fac_piramidal_nariz_derecha_3;
    }

    public function setValMusFacPiramidalNarizDerecha3(?string $val_mus_fac_piramidal_nariz_derecha_3): self
    {
        $this->val_mus_fac_piramidal_nariz_derecha_3 = $val_mus_fac_piramidal_nariz_derecha_3;

        return $this;
    }

    public function getValMusFacPiramidalNarizDerecha4(): ?string
    {
        return $this->val_mus_fac_piramidal_nariz_derecha_4;
    }

    public function setValMusFacPiramidalNarizDerecha4(?string $val_mus_fac_piramidal_nariz_derecha_4): self
    {
        $this->val_mus_fac_piramidal_nariz_derecha_4 = $val_mus_fac_piramidal_nariz_derecha_4;

        return $this;
    }

    public function getValMusFacPiramidalNarizDerecha5(): ?string
    {
        return $this->val_mus_fac_piramidal_nariz_derecha_5;
    }

    public function setValMusFacPiramidalNarizDerecha5(?string $val_mus_fac_piramidal_nariz_derecha_5): self
    {
        $this->val_mus_fac_piramidal_nariz_derecha_5 = $val_mus_fac_piramidal_nariz_derecha_5;

        return $this;
    }

    public function getValMusFacPiramidalNarizDerecha6(): ?string
    {
        return $this->val_mus_fac_piramidal_nariz_derecha_6;
    }

    public function setValMusFacPiramidalNarizDerecha6(?string $val_mus_fac_piramidal_nariz_derecha_6): self
    {
        $this->val_mus_fac_piramidal_nariz_derecha_6 = $val_mus_fac_piramidal_nariz_derecha_6;

        return $this;
    }

    public function getValMusFacPiramidalNarizDerecha7(): ?string
    {
        return $this->val_mus_fac_piramidal_nariz_derecha_7;
    }

    public function setValMusFacPiramidalNarizDerecha7(?string $val_mus_fac_piramidal_nariz_derecha_7): self
    {
        $this->val_mus_fac_piramidal_nariz_derecha_7 = $val_mus_fac_piramidal_nariz_derecha_7;

        return $this;
    }

    public function getValMusFacPiramidalNarizDerecha8(): ?string
    {
        return $this->val_mus_fac_piramidal_nariz_derecha_8;
    }

    public function setValMusFacPiramidalNarizDerecha8(?string $val_mus_fac_piramidal_nariz_derecha_8): self
    {
        $this->val_mus_fac_piramidal_nariz_derecha_8 = $val_mus_fac_piramidal_nariz_derecha_8;

        return $this;
    }

    public function getValMusFacPiramidalNarizDerecha9(): ?string
    {
        return $this->val_mus_fac_piramidal_nariz_derecha_9;
    }

    public function setValMusFacPiramidalNarizDerecha9(?string $val_mus_fac_piramidal_nariz_derecha_9): self
    {
        $this->val_mus_fac_piramidal_nariz_derecha_9 = $val_mus_fac_piramidal_nariz_derecha_9;

        return $this;
    }

    public function getValMusFacPiramidalNarizDerecha10(): ?string
    {
        return $this->val_mus_fac_piramidal_nariz_derecha_10;
    }

    public function setValMusFacPiramidalNarizDerecha10(?string $val_mus_fac_piramidal_nariz_derecha_10): self
    {
        $this->val_mus_fac_piramidal_nariz_derecha_10 = $val_mus_fac_piramidal_nariz_derecha_10;

        return $this;
    }

    public function getValMusFacPiramidalNarizDerecha11(): ?string
    {
        return $this->val_mus_fac_piramidal_nariz_derecha_11;
    }

    public function setValMusFacPiramidalNarizDerecha11(?string $val_mus_fac_piramidal_nariz_derecha_11): self
    {
        $this->val_mus_fac_piramidal_nariz_derecha_11 = $val_mus_fac_piramidal_nariz_derecha_11;

        return $this;
    }

    public function getValMusFacPiramidalNarizDerecha12(): ?string
    {
        return $this->val_mus_fac_piramidal_nariz_derecha_12;
    }

    public function setValMusFacPiramidalNarizDerecha12(?string $val_mus_fac_piramidal_nariz_derecha_12): self
    {
        $this->val_mus_fac_piramidal_nariz_derecha_12 = $val_mus_fac_piramidal_nariz_derecha_12;

        return $this;
    }

    public function getValMusFacPiramidalNarizIzquierda1(): ?string
    {
        return $this->val_mus_fac_piramidal_nariz_izquierda_1;
    }

    public function setValMusFacPiramidalNarizIzquierda1(?string $val_mus_fac_piramidal_nariz_izquierda_1): self
    {
        $this->val_mus_fac_piramidal_nariz_izquierda_1 = $val_mus_fac_piramidal_nariz_izquierda_1;

        return $this;
    }

    public function getValMusFacPiramidalNarizIzquierda2(): ?string
    {
        return $this->val_mus_fac_piramidal_nariz_izquierda_2;
    }

    public function setValMusFacPiramidalNarizIzquierda2(?string $val_mus_fac_piramidal_nariz_izquierda_2): self
    {
        $this->val_mus_fac_piramidal_nariz_izquierda_2 = $val_mus_fac_piramidal_nariz_izquierda_2;

        return $this;
    }

    public function getValMusFacPiramidalNarizIzquierda3(): ?string
    {
        return $this->val_mus_fac_piramidal_nariz_izquierda_3;
    }

    public function setValMusFacPiramidalNarizIzquierda3(?string $val_mus_fac_piramidal_nariz_izquierda_3): self
    {
        $this->val_mus_fac_piramidal_nariz_izquierda_3 = $val_mus_fac_piramidal_nariz_izquierda_3;

        return $this;
    }

    public function getValMusFacPiramidalNarizIzquierda4(): ?string
    {
        return $this->val_mus_fac_piramidal_nariz_izquierda_4;
    }

    public function setValMusFacPiramidalNarizIzquierda4(?string $val_mus_fac_piramidal_nariz_izquierda_4): self
    {
        $this->val_mus_fac_piramidal_nariz_izquierda_4 = $val_mus_fac_piramidal_nariz_izquierda_4;

        return $this;
    }

    public function getValMusFacPiramidalNarizIzquierda5(): ?string
    {
        return $this->val_mus_fac_piramidal_nariz_izquierda_5;
    }

    public function setValMusFacPiramidalNarizIzquierda5(?string $val_mus_fac_piramidal_nariz_izquierda_5): self
    {
        $this->val_mus_fac_piramidal_nariz_izquierda_5 = $val_mus_fac_piramidal_nariz_izquierda_5;

        return $this;
    }

    public function getValMusFacPiramidalNarizIzquierda6(): ?string
    {
        return $this->val_mus_fac_piramidal_nariz_izquierda_6;
    }

    public function setValMusFacPiramidalNarizIzquierda6(?string $val_mus_fac_piramidal_nariz_izquierda_6): self
    {
        $this->val_mus_fac_piramidal_nariz_izquierda_6 = $val_mus_fac_piramidal_nariz_izquierda_6;

        return $this;
    }

    public function getValMusFacPiramidalNarizIzquierda7(): ?string
    {
        return $this->val_mus_fac_piramidal_nariz_izquierda_7;
    }

    public function setValMusFacPiramidalNarizIzquierda7(?string $val_mus_fac_piramidal_nariz_izquierda_7): self
    {
        $this->val_mus_fac_piramidal_nariz_izquierda_7 = $val_mus_fac_piramidal_nariz_izquierda_7;

        return $this;
    }

    public function getValMusFacPiramidalNarizIzquierda8(): ?string
    {
        return $this->val_mus_fac_piramidal_nariz_izquierda_8;
    }

    public function setValMusFacPiramidalNarizIzquierda8(?string $val_mus_fac_piramidal_nariz_izquierda_8): self
    {
        $this->val_mus_fac_piramidal_nariz_izquierda_8 = $val_mus_fac_piramidal_nariz_izquierda_8;

        return $this;
    }

    public function getValMusFacPiramidalNarizIzquierda9(): ?string
    {
        return $this->val_mus_fac_piramidal_nariz_izquierda_9;
    }

    public function setValMusFacPiramidalNarizIzquierda9(?string $val_mus_fac_piramidal_nariz_izquierda_9): self
    {
        $this->val_mus_fac_piramidal_nariz_izquierda_9 = $val_mus_fac_piramidal_nariz_izquierda_9;

        return $this;
    }

    public function getValMusFacPiramidalNarizIzquierda10(): ?string
    {
        return $this->val_mus_fac_piramidal_nariz_izquierda_10;
    }

    public function setValMusFacPiramidalNarizIzquierda10(?string $val_mus_fac_piramidal_nariz_izquierda_10): self
    {
        $this->val_mus_fac_piramidal_nariz_izquierda_10 = $val_mus_fac_piramidal_nariz_izquierda_10;

        return $this;
    }

    public function getValMusFacPiramidalNarizIzquierda11(): ?string
    {
        return $this->val_mus_fac_piramidal_nariz_izquierda_11;
    }

    public function setValMusFacPiramidalNarizIzquierda11(?string $val_mus_fac_piramidal_nariz_izquierda_11): self
    {
        $this->val_mus_fac_piramidal_nariz_izquierda_11 = $val_mus_fac_piramidal_nariz_izquierda_11;

        return $this;
    }

    public function getValMusFacPiramidalNarizIzquierda12(): ?string
    {
        return $this->val_mus_fac_piramidal_nariz_izquierda_12;
    }

    public function setValMusFacPiramidalNarizIzquierda12(?string $val_mus_fac_piramidal_nariz_izquierda_12): self
    {
        $this->val_mus_fac_piramidal_nariz_izquierda_12 = $val_mus_fac_piramidal_nariz_izquierda_12;

        return $this;
    }

    public function getValMusFacTransversoDerecha1(): ?string
    {
        return $this->val_mus_fac_transverso_derecha_1;
    }

    public function setValMusFacTransversoDerecha1(?string $val_mus_fac_transverso_derecha_1): self
    {
        $this->val_mus_fac_transverso_derecha_1 = $val_mus_fac_transverso_derecha_1;

        return $this;
    }

    public function getValMusFacTransversoDerecha2(): ?string
    {
        return $this->val_mus_fac_transverso_derecha_2;
    }

    public function setValMusFacTransversoDerecha2(?string $val_mus_fac_transverso_derecha_2): self
    {
        $this->val_mus_fac_transverso_derecha_2 = $val_mus_fac_transverso_derecha_2;

        return $this;
    }

    public function getValMusFacTransversoDerecha3(): ?string
    {
        return $this->val_mus_fac_transverso_derecha_3;
    }

    public function setValMusFacTransversoDerecha3(?string $val_mus_fac_transverso_derecha_3): self
    {
        $this->val_mus_fac_transverso_derecha_3 = $val_mus_fac_transverso_derecha_3;

        return $this;
    }

    public function getValMusFacTransversoDerecha4(): ?string
    {
        return $this->val_mus_fac_transverso_derecha_4;
    }

    public function setValMusFacTransversoDerecha4(?string $val_mus_fac_transverso_derecha_4): self
    {
        $this->val_mus_fac_transverso_derecha_4 = $val_mus_fac_transverso_derecha_4;

        return $this;
    }

    public function getValMusFacTransversoDerecha5(): ?string
    {
        return $this->val_mus_fac_transverso_derecha_5;
    }

    public function setValMusFacTransversoDerecha5(?string $val_mus_fac_transverso_derecha_5): self
    {
        $this->val_mus_fac_transverso_derecha_5 = $val_mus_fac_transverso_derecha_5;

        return $this;
    }

    public function getValMusFacTransversoDerecha6(): ?string
    {
        return $this->val_mus_fac_transverso_derecha_6;
    }

    public function setValMusFacTransversoDerecha6(?string $val_mus_fac_transverso_derecha_6): self
    {
        $this->val_mus_fac_transverso_derecha_6 = $val_mus_fac_transverso_derecha_6;

        return $this;
    }

    public function getValMusFacTransversoDerecha7(): ?string
    {
        return $this->val_mus_fac_transverso_derecha_7;
    }

    public function setValMusFacTransversoDerecha7(?string $val_mus_fac_transverso_derecha_7): self
    {
        $this->val_mus_fac_transverso_derecha_7 = $val_mus_fac_transverso_derecha_7;

        return $this;
    }

    public function getValMusFacTransversoDerecha8(): ?string
    {
        return $this->val_mus_fac_transverso_derecha_8;
    }

    public function setValMusFacTransversoDerecha8(?string $val_mus_fac_transverso_derecha_8): self
    {
        $this->val_mus_fac_transverso_derecha_8 = $val_mus_fac_transverso_derecha_8;

        return $this;
    }

    public function getValMusFacTransversoDerecha9(): ?string
    {
        return $this->val_mus_fac_transverso_derecha_9;
    }

    public function setValMusFacTransversoDerecha9(?string $val_mus_fac_transverso_derecha_9): self
    {
        $this->val_mus_fac_transverso_derecha_9 = $val_mus_fac_transverso_derecha_9;

        return $this;
    }

    public function getValMusFacTransversoDerecha10(): ?string
    {
        return $this->val_mus_fac_transverso_derecha_10;
    }

    public function setValMusFacTransversoDerecha10(?string $val_mus_fac_transverso_derecha_10): self
    {
        $this->val_mus_fac_transverso_derecha_10 = $val_mus_fac_transverso_derecha_10;

        return $this;
    }

    public function getValMusFacTransversoDerecha11(): ?string
    {
        return $this->val_mus_fac_transverso_derecha_11;
    }

    public function setValMusFacTransversoDerecha11(?string $val_mus_fac_transverso_derecha_11): self
    {
        $this->val_mus_fac_transverso_derecha_11 = $val_mus_fac_transverso_derecha_11;

        return $this;
    }

    public function getValMusFacTransversoDerecha12(): ?string
    {
        return $this->val_mus_fac_transverso_derecha_12;
    }

    public function setValMusFacTransversoDerecha12(?string $val_mus_fac_transverso_derecha_12): self
    {
        $this->val_mus_fac_transverso_derecha_12 = $val_mus_fac_transverso_derecha_12;

        return $this;
    }

    public function getValMusFacTransversoIzquierda1(): ?string
    {
        return $this->val_mus_fac_transverso_izquierda_1;
    }

    public function setValMusFacTransversoIzquierda1(?string $val_mus_fac_transverso_izquierda_1): self
    {
        $this->val_mus_fac_transverso_izquierda_1 = $val_mus_fac_transverso_izquierda_1;

        return $this;
    }

    public function getValMusFacTransversoIzquierda2(): ?string
    {
        return $this->val_mus_fac_transverso_izquierda_2;
    }

    public function setValMusFacTransversoIzquierda2(?string $val_mus_fac_transverso_izquierda_2): self
    {
        $this->val_mus_fac_transverso_izquierda_2 = $val_mus_fac_transverso_izquierda_2;

        return $this;
    }

    public function getValMusFacTransversoIzquierda3(): ?string
    {
        return $this->val_mus_fac_transverso_izquierda_3;
    }

    public function setValMusFacTransversoIzquierda3(?string $val_mus_fac_transverso_izquierda_3): self
    {
        $this->val_mus_fac_transverso_izquierda_3 = $val_mus_fac_transverso_izquierda_3;

        return $this;
    }

    public function getValMusFacTransversoIzquierda4(): ?string
    {
        return $this->val_mus_fac_transverso_izquierda_4;
    }

    public function setValMusFacTransversoIzquierda4(?string $val_mus_fac_transverso_izquierda_4): self
    {
        $this->val_mus_fac_transverso_izquierda_4 = $val_mus_fac_transverso_izquierda_4;

        return $this;
    }

    public function getValMusFacTransversoIzquierda5(): ?string
    {
        return $this->val_mus_fac_transverso_izquierda_5;
    }

    public function setValMusFacTransversoIzquierda5(?string $val_mus_fac_transverso_izquierda_5): self
    {
        $this->val_mus_fac_transverso_izquierda_5 = $val_mus_fac_transverso_izquierda_5;

        return $this;
    }

    public function getValMusFacTransversoIzquierda6(): ?string
    {
        return $this->val_mus_fac_transverso_izquierda_6;
    }

    public function setValMusFacTransversoIzquierda6(?string $val_mus_fac_transverso_izquierda_6): self
    {
        $this->val_mus_fac_transverso_izquierda_6 = $val_mus_fac_transverso_izquierda_6;

        return $this;
    }

    public function getValMusFacTransversoIzquierda7(): ?string
    {
        return $this->val_mus_fac_transverso_izquierda_7;
    }

    public function setValMusFacTransversoIzquierda7(?string $val_mus_fac_transverso_izquierda_7): self
    {
        $this->val_mus_fac_transverso_izquierda_7 = $val_mus_fac_transverso_izquierda_7;

        return $this;
    }

    public function getValMusFacTransversoIzquierda8(): ?string
    {
        return $this->val_mus_fac_transverso_izquierda_8;
    }

    public function setValMusFacTransversoIzquierda8(?string $val_mus_fac_transverso_izquierda_8): self
    {
        $this->val_mus_fac_transverso_izquierda_8 = $val_mus_fac_transverso_izquierda_8;

        return $this;
    }

    public function getValMusFacTransversoIzquierda9(): ?string
    {
        return $this->val_mus_fac_transverso_izquierda_9;
    }

    public function setValMusFacTransversoIzquierda9(?string $val_mus_fac_transverso_izquierda_9): self
    {
        $this->val_mus_fac_transverso_izquierda_9 = $val_mus_fac_transverso_izquierda_9;

        return $this;
    }

    public function getValMusFacTransversoIzquierda10(): ?string
    {
        return $this->val_mus_fac_transverso_izquierda_10;
    }

    public function setValMusFacTransversoIzquierda10(?string $val_mus_fac_transverso_izquierda_10): self
    {
        $this->val_mus_fac_transverso_izquierda_10 = $val_mus_fac_transverso_izquierda_10;

        return $this;
    }

    public function getValMusFacTransversoIzquierda11(): ?string
    {
        return $this->val_mus_fac_transverso_izquierda_11;
    }

    public function setValMusFacTransversoIzquierda11(?string $val_mus_fac_transverso_izquierda_11): self
    {
        $this->val_mus_fac_transverso_izquierda_11 = $val_mus_fac_transverso_izquierda_11;

        return $this;
    }

    public function getValMusFacTransversoIzquierda12(): ?string
    {
        return $this->val_mus_fac_transverso_izquierda_12;
    }

    public function setValMusFacTransversoIzquierda12(?string $val_mus_fac_transverso_izquierda_12): self
    {
        $this->val_mus_fac_transverso_izquierda_12 = $val_mus_fac_transverso_izquierda_12;

        return $this;
    }

    public function getValMusFacDilatadorDerecha1(): ?string
    {
        return $this->val_mus_fac_dilatador_derecha_1;
    }

    public function setValMusFacDilatadorDerecha1(?string $val_mus_fac_dilatador_derecha_1): self
    {
        $this->val_mus_fac_dilatador_derecha_1 = $val_mus_fac_dilatador_derecha_1;

        return $this;
    }

    public function getValMusFacDilatadorDerecha2(): ?string
    {
        return $this->val_mus_fac_dilatador_derecha_2;
    }

    public function setValMusFacDilatadorDerecha2(?string $val_mus_fac_dilatador_derecha_2): self
    {
        $this->val_mus_fac_dilatador_derecha_2 = $val_mus_fac_dilatador_derecha_2;

        return $this;
    }

    public function getValMusFacDilatadorDerecha3(): ?string
    {
        return $this->val_mus_fac_dilatador_derecha_3;
    }

    public function setValMusFacDilatadorDerecha3(?string $val_mus_fac_dilatador_derecha_3): self
    {
        $this->val_mus_fac_dilatador_derecha_3 = $val_mus_fac_dilatador_derecha_3;

        return $this;
    }

    public function getValMusFacDilatadorDerecha4(): ?string
    {
        return $this->val_mus_fac_dilatador_derecha_4;
    }

    public function setValMusFacDilatadorDerecha4(?string $val_mus_fac_dilatador_derecha_4): self
    {
        $this->val_mus_fac_dilatador_derecha_4 = $val_mus_fac_dilatador_derecha_4;

        return $this;
    }

    public function getValMusFacDilatadorDerecha5(): ?string
    {
        return $this->val_mus_fac_dilatador_derecha_5;
    }

    public function setValMusFacDilatadorDerecha5(?string $val_mus_fac_dilatador_derecha_5): self
    {
        $this->val_mus_fac_dilatador_derecha_5 = $val_mus_fac_dilatador_derecha_5;

        return $this;
    }

    public function getValMusFacDilatadorDerecha6(): ?string
    {
        return $this->val_mus_fac_dilatador_derecha_6;
    }

    public function setValMusFacDilatadorDerecha6(?string $val_mus_fac_dilatador_derecha_6): self
    {
        $this->val_mus_fac_dilatador_derecha_6 = $val_mus_fac_dilatador_derecha_6;

        return $this;
    }

    public function getValMusFacDilatadorDerecha7(): ?string
    {
        return $this->val_mus_fac_dilatador_derecha_7;
    }

    public function setValMusFacDilatadorDerecha7(string $val_mus_fac_dilatador_derecha_7): self
    {
        $this->val_mus_fac_dilatador_derecha_7 = $val_mus_fac_dilatador_derecha_7;

        return $this;
    }

    public function getValMusFacDilatadorDerecha8(): ?string
    {
        return $this->val_mus_fac_dilatador_derecha_8;
    }

    public function setValMusFacDilatadorDerecha8(?string $val_mus_fac_dilatador_derecha_8): self
    {
        $this->val_mus_fac_dilatador_derecha_8 = $val_mus_fac_dilatador_derecha_8;

        return $this;
    }

    public function getValMusFacDilatadorDerecha9(): ?string
    {
        return $this->val_mus_fac_dilatador_derecha_9;
    }

    public function setValMusFacDilatadorDerecha9(?string $val_mus_fac_dilatador_derecha_9): self
    {
        $this->val_mus_fac_dilatador_derecha_9 = $val_mus_fac_dilatador_derecha_9;

        return $this;
    }

    public function getValMusFacDilatadorDerecha10(): ?string
    {
        return $this->val_mus_fac_dilatador_derecha_10;
    }

    public function setValMusFacDilatadorDerecha10(?string $val_mus_fac_dilatador_derecha_10): self
    {
        $this->val_mus_fac_dilatador_derecha_10 = $val_mus_fac_dilatador_derecha_10;

        return $this;
    }

    public function getValMusFacDilatadorDerecha11(): ?string
    {
        return $this->val_mus_fac_dilatador_derecha_11;
    }

    public function setValMusFacDilatadorDerecha11(?string $val_mus_fac_dilatador_derecha_11): self
    {
        $this->val_mus_fac_dilatador_derecha_11 = $val_mus_fac_dilatador_derecha_11;

        return $this;
    }

    public function getValMusFacDilatadorDerecha12(): ?string
    {
        return $this->val_mus_fac_dilatador_derecha_12;
    }

    public function setValMusFacDilatadorDerecha12(?string $val_mus_fac_dilatador_derecha_12): self
    {
        $this->val_mus_fac_dilatador_derecha_12 = $val_mus_fac_dilatador_derecha_12;

        return $this;
    }

    public function getValMusFacDilatadorIzquierda1(): ?string
    {
        return $this->val_mus_fac_dilatador_izquierda_1;
    }

    public function setValMusFacDilatadorIzquierda1(?string $val_mus_fac_dilatador_izquierda_1): self
    {
        $this->val_mus_fac_dilatador_izquierda_1 = $val_mus_fac_dilatador_izquierda_1;

        return $this;
    }

    public function getValMusFacDilatadorIzquierda2(): ?string
    {
        return $this->val_mus_fac_dilatador_izquierda_2;
    }

    public function setValMusFacDilatadorIzquierda2(?string $val_mus_fac_dilatador_izquierda_2): self
    {
        $this->val_mus_fac_dilatador_izquierda_2 = $val_mus_fac_dilatador_izquierda_2;

        return $this;
    }

    public function getValMusFacDilatadorIzquierda3(): ?string
    {
        return $this->val_mus_fac_dilatador_izquierda_3;
    }

    public function setValMusFacDilatadorIzquierda3(?string $val_mus_fac_dilatador_izquierda_3): self
    {
        $this->val_mus_fac_dilatador_izquierda_3 = $val_mus_fac_dilatador_izquierda_3;

        return $this;
    }

    public function getValMusFacDilatadorIzquierda4(): ?string
    {
        return $this->val_mus_fac_dilatador_izquierda_4;
    }

    public function setValMusFacDilatadorIzquierda4(?string $val_mus_fac_dilatador_izquierda_4): self
    {
        $this->val_mus_fac_dilatador_izquierda_4 = $val_mus_fac_dilatador_izquierda_4;

        return $this;
    }

    public function getValMusFacDilatadorIzquierda5(): ?string
    {
        return $this->val_mus_fac_dilatador_izquierda_5;
    }

    public function setValMusFacDilatadorIzquierda5(?string $val_mus_fac_dilatador_izquierda_5): self
    {
        $this->val_mus_fac_dilatador_izquierda_5 = $val_mus_fac_dilatador_izquierda_5;

        return $this;
    }

    public function getValMusFacDilatadorIzquierda6(): ?string
    {
        return $this->val_mus_fac_dilatador_izquierda_6;
    }

    public function setValMusFacDilatadorIzquierda6(?string $val_mus_fac_dilatador_izquierda_6): self
    {
        $this->val_mus_fac_dilatador_izquierda_6 = $val_mus_fac_dilatador_izquierda_6;

        return $this;
    }

    public function getValMusFacDilatadorIzquierda7(): ?string
    {
        return $this->val_mus_fac_dilatador_izquierda_7;
    }

    public function setValMusFacDilatadorIzquierda7(?string $val_mus_fac_dilatador_izquierda_7): self
    {
        $this->val_mus_fac_dilatador_izquierda_7 = $val_mus_fac_dilatador_izquierda_7;

        return $this;
    }

    public function getValMusFacDilatadorIzquierda8(): ?string
    {
        return $this->val_mus_fac_dilatador_izquierda_8;
    }

    public function setValMusFacDilatadorIzquierda8(?string $val_mus_fac_dilatador_izquierda_8): self
    {
        $this->val_mus_fac_dilatador_izquierda_8 = $val_mus_fac_dilatador_izquierda_8;

        return $this;
    }

    public function getValMusFacDilatadorIzquierda9(): ?string
    {
        return $this->val_mus_fac_dilatador_izquierda_9;
    }

    public function setValMusFacDilatadorIzquierda9(?string $val_mus_fac_dilatador_izquierda_9): self
    {
        $this->val_mus_fac_dilatador_izquierda_9 = $val_mus_fac_dilatador_izquierda_9;

        return $this;
    }

    public function getValMusFacDilatadorIzquierda10(): ?string
    {
        return $this->val_mus_fac_dilatador_izquierda_10;
    }

    public function setValMusFacDilatadorIzquierda10(?string $val_mus_fac_dilatador_izquierda_10): self
    {
        $this->val_mus_fac_dilatador_izquierda_10 = $val_mus_fac_dilatador_izquierda_10;

        return $this;
    }

    public function getValMusFacDilatadorIzquierda11(): ?string
    {
        return $this->val_mus_fac_dilatador_izquierda_11;
    }

    public function setValMusFacDilatadorIzquierda11(?string $val_mus_fac_dilatador_izquierda_11): self
    {
        $this->val_mus_fac_dilatador_izquierda_11 = $val_mus_fac_dilatador_izquierda_11;

        return $this;
    }

    public function getValMusFacDilatadorIzquierda12(): ?string
    {
        return $this->val_mus_fac_dilatador_izquierda_12;
    }

    public function setValMusFacDilatadorIzquierda12(?string $val_mus_fac_dilatador_izquierda_12): self
    {
        $this->val_mus_fac_dilatador_izquierda_12 = $val_mus_fac_dilatador_izquierda_12;

        return $this;
    }

    public function getValMusFacOrbicularLabiosDerecha1(): ?string
    {
        return $this->val_mus_fac_orbicular_labios_derecha_1;
    }

    public function setValMusFacOrbicularLabiosDerecha1(?string $val_mus_fac_orbicular_labios_derecha_1): self
    {
        $this->val_mus_fac_orbicular_labios_derecha_1 = $val_mus_fac_orbicular_labios_derecha_1;

        return $this;
    }

    public function getValMusFacOrbicularLabiosDerecha2(): ?string
    {
        return $this->val_mus_fac_orbicular_labios_derecha_2;
    }

    public function setValMusFacOrbicularLabiosDerecha2(?string $val_mus_fac_orbicular_labios_derecha_2): self
    {
        $this->val_mus_fac_orbicular_labios_derecha_2 = $val_mus_fac_orbicular_labios_derecha_2;

        return $this;
    }

    public function getValMusFacOrbicularLabiosDerecha3(): ?string
    {
        return $this->val_mus_fac_orbicular_labios_derecha_3;
    }

    public function setValMusFacOrbicularLabiosDerecha3(?string $val_mus_fac_orbicular_labios_derecha_3): self
    {
        $this->val_mus_fac_orbicular_labios_derecha_3 = $val_mus_fac_orbicular_labios_derecha_3;

        return $this;
    }

    public function getValMusFacOrbicularLabiosDerecha4(): ?string
    {
        return $this->val_mus_fac_orbicular_labios_derecha_4;
    }

    public function setValMusFacOrbicularLabiosDerecha4(?string $val_mus_fac_orbicular_labios_derecha_4): self
    {
        $this->val_mus_fac_orbicular_labios_derecha_4 = $val_mus_fac_orbicular_labios_derecha_4;

        return $this;
    }

    public function getValMusFacOrbicularLabiosDerecha5(): ?string
    {
        return $this->val_mus_fac_orbicular_labios_derecha_5;
    }

    public function setValMusFacOrbicularLabiosDerecha5(?string $val_mus_fac_orbicular_labios_derecha_5): self
    {
        $this->val_mus_fac_orbicular_labios_derecha_5 = $val_mus_fac_orbicular_labios_derecha_5;

        return $this;
    }

    public function getValMusFacOrbicularLabiosDerecha6(): ?string
    {
        return $this->val_mus_fac_orbicular_labios_derecha_6;
    }

    public function setValMusFacOrbicularLabiosDerecha6(?string $val_mus_fac_orbicular_labios_derecha_6): self
    {
        $this->val_mus_fac_orbicular_labios_derecha_6 = $val_mus_fac_orbicular_labios_derecha_6;

        return $this;
    }

    public function getValMusFacOrbicularLabiosDerecha7(): ?string
    {
        return $this->val_mus_fac_orbicular_labios_derecha_7;
    }

    public function setValMusFacOrbicularLabiosDerecha7(?string $val_mus_fac_orbicular_labios_derecha_7): self
    {
        $this->val_mus_fac_orbicular_labios_derecha_7 = $val_mus_fac_orbicular_labios_derecha_7;

        return $this;
    }

    public function getValMusFacOrbicularLabiosDerecha8(): ?string
    {
        return $this->val_mus_fac_orbicular_labios_derecha_8;
    }

    public function setValMusFacOrbicularLabiosDerecha8(?string $val_mus_fac_orbicular_labios_derecha_8): self
    {
        $this->val_mus_fac_orbicular_labios_derecha_8 = $val_mus_fac_orbicular_labios_derecha_8;

        return $this;
    }

    public function getValMusFacOrbicularLabiosDerecha9(): ?string
    {
        return $this->val_mus_fac_orbicular_labios_derecha_9;
    }

    public function setValMusFacOrbicularLabiosDerecha9(?string $val_mus_fac_orbicular_labios_derecha_9): self
    {
        $this->val_mus_fac_orbicular_labios_derecha_9 = $val_mus_fac_orbicular_labios_derecha_9;

        return $this;
    }

    public function getValMusFacOrbicularLabiosDerecha10(): ?string
    {
        return $this->val_mus_fac_orbicular_labios_derecha_10;
    }

    public function setValMusFacOrbicularLabiosDerecha10(?string $val_mus_fac_orbicular_labios_derecha_10): self
    {
        $this->val_mus_fac_orbicular_labios_derecha_10 = $val_mus_fac_orbicular_labios_derecha_10;

        return $this;
    }

    public function getValMusFacOrbicularLabiosDerecha11(): ?string
    {
        return $this->val_mus_fac_orbicular_labios_derecha_11;
    }

    public function setValMusFacOrbicularLabiosDerecha11(?string $val_mus_fac_orbicular_labios_derecha_11): self
    {
        $this->val_mus_fac_orbicular_labios_derecha_11 = $val_mus_fac_orbicular_labios_derecha_11;

        return $this;
    }

    public function getValMusFacOrbicularLabiosDerecha12(): ?string
    {
        return $this->val_mus_fac_orbicular_labios_derecha_12;
    }

    public function setValMusFacOrbicularLabiosDerecha12(?string $val_mus_fac_orbicular_labios_derecha_12): self
    {
        $this->val_mus_fac_orbicular_labios_derecha_12 = $val_mus_fac_orbicular_labios_derecha_12;

        return $this;
    }

    public function getValMusFacOrbicularLabiosIzquierda1(): ?string
    {
        return $this->val_mus_fac_orbicular_labios_izquierda_1;
    }

    public function setValMusFacOrbicularLabiosIzquierda1(?string $val_mus_fac_orbicular_labios_izquierda_1): self
    {
        $this->val_mus_fac_orbicular_labios_izquierda_1 = $val_mus_fac_orbicular_labios_izquierda_1;

        return $this;
    }

    public function getValMusFacOrbicularLabiosIzquierda2(): ?string
    {
        return $this->val_mus_fac_orbicular_labios_izquierda_2;
    }

    public function setValMusFacOrbicularLabiosIzquierda2(?string $val_mus_fac_orbicular_labios_izquierda_2): self
    {
        $this->val_mus_fac_orbicular_labios_izquierda_2 = $val_mus_fac_orbicular_labios_izquierda_2;

        return $this;
    }

    public function getValMusFacOrbicularLabiosIzquierda3(): ?string
    {
        return $this->val_mus_fac_orbicular_labios_izquierda_3;
    }

    public function setValMusFacOrbicularLabiosIzquierda3(?string $val_mus_fac_orbicular_labios_izquierda_3): self
    {
        $this->val_mus_fac_orbicular_labios_izquierda_3 = $val_mus_fac_orbicular_labios_izquierda_3;

        return $this;
    }

    public function getValMusFacOrbicularLabiosIzquierda4(): ?string
    {
        return $this->val_mus_fac_orbicular_labios_izquierda_4;
    }

    public function setValMusFacOrbicularLabiosIzquierda4(?string $val_mus_fac_orbicular_labios_izquierda_4): self
    {
        $this->val_mus_fac_orbicular_labios_izquierda_4 = $val_mus_fac_orbicular_labios_izquierda_4;

        return $this;
    }

    public function getValMusFacOrbicularLabiosIzquierda5(): ?string
    {
        return $this->val_mus_fac_orbicular_labios_izquierda_5;
    }

    public function setValMusFacOrbicularLabiosIzquierda5(?string $val_mus_fac_orbicular_labios_izquierda_5): self
    {
        $this->val_mus_fac_orbicular_labios_izquierda_5 = $val_mus_fac_orbicular_labios_izquierda_5;

        return $this;
    }

    public function getValMusFacOrbicularLabiosIzquierda6(): ?string
    {
        return $this->val_mus_fac_orbicular_labios_izquierda_6;
    }

    public function setValMusFacOrbicularLabiosIzquierda6(?string $val_mus_fac_orbicular_labios_izquierda_6): self
    {
        $this->val_mus_fac_orbicular_labios_izquierda_6 = $val_mus_fac_orbicular_labios_izquierda_6;

        return $this;
    }

    public function getValMusFacOrbicularLabiosIzquierda7(): ?string
    {
        return $this->val_mus_fac_orbicular_labios_izquierda_7;
    }

    public function setValMusFacOrbicularLabiosIzquierda7(?string $val_mus_fac_orbicular_labios_izquierda_7): self
    {
        $this->val_mus_fac_orbicular_labios_izquierda_7 = $val_mus_fac_orbicular_labios_izquierda_7;

        return $this;
    }

    public function getValMusFacOrbicularLabiosIzquierda8(): ?string
    {
        return $this->val_mus_fac_orbicular_labios_izquierda_8;
    }

    public function setValMusFacOrbicularLabiosIzquierda8(?string $val_mus_fac_orbicular_labios_izquierda_8): self
    {
        $this->val_mus_fac_orbicular_labios_izquierda_8 = $val_mus_fac_orbicular_labios_izquierda_8;

        return $this;
    }

    public function getValMusFacOrbicularLabiosIzquierda9(): ?string
    {
        return $this->val_mus_fac_orbicular_labios_izquierda_9;
    }

    public function setValMusFacOrbicularLabiosIzquierda9(?string $val_mus_fac_orbicular_labios_izquierda_9): self
    {
        $this->val_mus_fac_orbicular_labios_izquierda_9 = $val_mus_fac_orbicular_labios_izquierda_9;

        return $this;
    }

    public function getValMusFacOrbicularLabiosIzquierda10(): ?string
    {
        return $this->val_mus_fac_orbicular_labios_izquierda_10;
    }

    public function setValMusFacOrbicularLabiosIzquierda10(?string $val_mus_fac_orbicular_labios_izquierda_10): self
    {
        $this->val_mus_fac_orbicular_labios_izquierda_10 = $val_mus_fac_orbicular_labios_izquierda_10;

        return $this;
    }

    public function getValMusFacOrbicularLabiosIzquierda11(): ?string
    {
        return $this->val_mus_fac_orbicular_labios_izquierda_11;
    }

    public function setValMusFacOrbicularLabiosIzquierda11(?string $val_mus_fac_orbicular_labios_izquierda_11): self
    {
        $this->val_mus_fac_orbicular_labios_izquierda_11 = $val_mus_fac_orbicular_labios_izquierda_11;

        return $this;
    }

    public function getValMusFacOrbicularLabiosIzquierda12(): ?string
    {
        return $this->val_mus_fac_orbicular_labios_izquierda_12;
    }

    public function setValMusFacOrbicularLabiosIzquierda12(?string $val_mus_fac_orbicular_labios_izquierda_12): self
    {
        $this->val_mus_fac_orbicular_labios_izquierda_12 = $val_mus_fac_orbicular_labios_izquierda_12;

        return $this;
    }

    public function getValMusFacElevadorLabioSuperiorDerecha1(): ?string
    {
        return $this->val_mus_fac_elevador_labio_superior_derecha_1;
    }

    public function setValMusFacElevadorLabioSuperiorDerecha1(?string $val_mus_fac_elevador_labio_superior_derecha_1): self
    {
        $this->val_mus_fac_elevador_labio_superior_derecha_1 = $val_mus_fac_elevador_labio_superior_derecha_1;

        return $this;
    }

    public function getValMusFacElevadorLabioSuperiorDerecha2(): ?string
    {
        return $this->val_mus_fac_elevador_labio_superior_derecha_2;
    }

    public function setValMusFacElevadorLabioSuperiorDerecha2(?string $val_mus_fac_elevador_labio_superior_derecha_2): self
    {
        $this->val_mus_fac_elevador_labio_superior_derecha_2 = $val_mus_fac_elevador_labio_superior_derecha_2;

        return $this;
    }

    public function getValMusFacElevadorLabioSuperiorDerecha3(): ?string
    {
        return $this->val_mus_fac_elevador_labio_superior_derecha_3;
    }

    public function setValMusFacElevadorLabioSuperiorDerecha3(?string $val_mus_fac_elevador_labio_superior_derecha_3): self
    {
        $this->val_mus_fac_elevador_labio_superior_derecha_3 = $val_mus_fac_elevador_labio_superior_derecha_3;

        return $this;
    }

    public function getValMusFacElevadorLabioSuperiorDerecha4(): ?string
    {
        return $this->val_mus_fac_elevador_labio_superior_derecha_4;
    }

    public function setValMusFacElevadorLabioSuperiorDerecha4(?string $val_mus_fac_elevador_labio_superior_derecha_4): self
    {
        $this->val_mus_fac_elevador_labio_superior_derecha_4 = $val_mus_fac_elevador_labio_superior_derecha_4;

        return $this;
    }

    public function getValMusFacElevadorLabioSuperiorDerecha5(): ?string
    {
        return $this->val_mus_fac_elevador_labio_superior_derecha_5;
    }

    public function setValMusFacElevadorLabioSuperiorDerecha5(?string $val_mus_fac_elevador_labio_superior_derecha_5): self
    {
        $this->val_mus_fac_elevador_labio_superior_derecha_5 = $val_mus_fac_elevador_labio_superior_derecha_5;

        return $this;
    }

    public function getValMusFacElevadorLabioSuperiorDerecha6(): ?string
    {
        return $this->val_mus_fac_elevador_labio_superior_derecha_6;
    }

    public function setValMusFacElevadorLabioSuperiorDerecha6(?string $val_mus_fac_elevador_labio_superior_derecha_6): self
    {
        $this->val_mus_fac_elevador_labio_superior_derecha_6 = $val_mus_fac_elevador_labio_superior_derecha_6;

        return $this;
    }

    public function getValMusFacElevadorLabioSuperiorDerecha7(): ?string
    {
        return $this->val_mus_fac_elevador_labio_superior_derecha_7;
    }

    public function setValMusFacElevadorLabioSuperiorDerecha7(?string $val_mus_fac_elevador_labio_superior_derecha_7): self
    {
        $this->val_mus_fac_elevador_labio_superior_derecha_7 = $val_mus_fac_elevador_labio_superior_derecha_7;

        return $this;
    }

    public function getValMusFacElevadorLabioSuperiorDerecha8(): ?string
    {
        return $this->val_mus_fac_elevador_labio_superior_derecha_8;
    }

    public function setValMusFacElevadorLabioSuperiorDerecha8(?string $val_mus_fac_elevador_labio_superior_derecha_8): self
    {
        $this->val_mus_fac_elevador_labio_superior_derecha_8 = $val_mus_fac_elevador_labio_superior_derecha_8;

        return $this;
    }

    public function getValMusFacElevadorLabioSuperiorDerecha9(): ?string
    {
        return $this->val_mus_fac_elevador_labio_superior_derecha_9;
    }

    public function setValMusFacElevadorLabioSuperiorDerecha9(?string $val_mus_fac_elevador_labio_superior_derecha_9): self
    {
        $this->val_mus_fac_elevador_labio_superior_derecha_9 = $val_mus_fac_elevador_labio_superior_derecha_9;

        return $this;
    }

    public function getValMusFacElevadorLabioSuperiorDerecha10(): ?string
    {
        return $this->val_mus_fac_elevador_labio_superior_derecha_10;
    }

    public function setValMusFacElevadorLabioSuperiorDerecha10(?string $val_mus_fac_elevador_labio_superior_derecha_10): self
    {
        $this->val_mus_fac_elevador_labio_superior_derecha_10 = $val_mus_fac_elevador_labio_superior_derecha_10;

        return $this;
    }

    public function getValMusFacElevadorLabioSuperiorDerecha11(): ?string
    {
        return $this->val_mus_fac_elevador_labio_superior_derecha_11;
    }

    public function setValMusFacElevadorLabioSuperiorDerecha11(?string $val_mus_fac_elevador_labio_superior_derecha_11): self
    {
        $this->val_mus_fac_elevador_labio_superior_derecha_11 = $val_mus_fac_elevador_labio_superior_derecha_11;

        return $this;
    }

    public function getValMusFacElevadorLabioSuperiorDerecha12(): ?string
    {
        return $this->val_mus_fac_elevador_labio_superior_derecha_12;
    }

    public function setValMusFacElevadorLabioSuperiorDerecha12(?string $val_mus_fac_elevador_labio_superior_derecha_12): self
    {
        $this->val_mus_fac_elevador_labio_superior_derecha_12 = $val_mus_fac_elevador_labio_superior_derecha_12;

        return $this;
    }

    public function getValMusFacElevadorLabioSuperiorIzquierda1(): ?string
    {
        return $this->val_mus_fac_elevador_labio_superior_izquierda_1;
    }

    public function setValMusFacElevadorLabioSuperiorIzquierda1(?string $val_mus_fac_elevador_labio_superior_izquierda_1): self
    {
        $this->val_mus_fac_elevador_labio_superior_izquierda_1 = $val_mus_fac_elevador_labio_superior_izquierda_1;

        return $this;
    }

    public function getValMusFacElevadorLabioSuperiorIzquierda2(): ?string
    {
        return $this->val_mus_fac_elevador_labio_superior_izquierda_2;
    }

    public function setValMusFacElevadorLabioSuperiorIzquierda2(?string $val_mus_fac_elevador_labio_superior_izquierda_2): self
    {
        $this->val_mus_fac_elevador_labio_superior_izquierda_2 = $val_mus_fac_elevador_labio_superior_izquierda_2;

        return $this;
    }

    public function getValMusFacElevadorLabioSuperiorIzquierda3(): ?string
    {
        return $this->val_mus_fac_elevador_labio_superior_izquierda_3;
    }

    public function setValMusFacElevadorLabioSuperiorIzquierda3(?string $val_mus_fac_elevador_labio_superior_izquierda_3): self
    {
        $this->val_mus_fac_elevador_labio_superior_izquierda_3 = $val_mus_fac_elevador_labio_superior_izquierda_3;

        return $this;
    }

    public function getValMusFacElevadorLabioSuperiorIzquierda4(): ?string
    {
        return $this->val_mus_fac_elevador_labio_superior_izquierda_4;
    }

    public function setValMusFacElevadorLabioSuperiorIzquierda4(?string $val_mus_fac_elevador_labio_superior_izquierda_4): self
    {
        $this->val_mus_fac_elevador_labio_superior_izquierda_4 = $val_mus_fac_elevador_labio_superior_izquierda_4;

        return $this;
    }

    public function getValMusFacElevadorLabioSuperiorIzquierda5(): ?string
    {
        return $this->val_mus_fac_elevador_labio_superior_izquierda_5;
    }

    public function setValMusFacElevadorLabioSuperiorIzquierda5(?string $val_mus_fac_elevador_labio_superior_izquierda_5): self
    {
        $this->val_mus_fac_elevador_labio_superior_izquierda_5 = $val_mus_fac_elevador_labio_superior_izquierda_5;

        return $this;
    }

    public function getValMusFacElevadorLabioSuperiorIzquierda6(): ?string
    {
        return $this->val_mus_fac_elevador_labio_superior_izquierda_6;
    }

    public function setValMusFacElevadorLabioSuperiorIzquierda6(?string $val_mus_fac_elevador_labio_superior_izquierda_6): self
    {
        $this->val_mus_fac_elevador_labio_superior_izquierda_6 = $val_mus_fac_elevador_labio_superior_izquierda_6;

        return $this;
    }

    public function getValMusFacElevadorLabioSuperiorIzquierda7(): ?string
    {
        return $this->val_mus_fac_elevador_labio_superior_izquierda_7;
    }

    public function setValMusFacElevadorLabioSuperiorIzquierda7(?string $val_mus_fac_elevador_labio_superior_izquierda_7): self
    {
        $this->val_mus_fac_elevador_labio_superior_izquierda_7 = $val_mus_fac_elevador_labio_superior_izquierda_7;

        return $this;
    }

    public function getValMusFacElevadorLabioSuperiorIzquierda8(): ?string
    {
        return $this->val_mus_fac_elevador_labio_superior_izquierda_8;
    }

    public function setValMusFacElevadorLabioSuperiorIzquierda8(?string $val_mus_fac_elevador_labio_superior_izquierda_8): self
    {
        $this->val_mus_fac_elevador_labio_superior_izquierda_8 = $val_mus_fac_elevador_labio_superior_izquierda_8;

        return $this;
    }

    public function getValMusFacElevadorLabioSuperiorIzquierda9(): ?string
    {
        return $this->val_mus_fac_elevador_labio_superior_izquierda_9;
    }

    public function setValMusFacElevadorLabioSuperiorIzquierda9(?string $val_mus_fac_elevador_labio_superior_izquierda_9): self
    {
        $this->val_mus_fac_elevador_labio_superior_izquierda_9 = $val_mus_fac_elevador_labio_superior_izquierda_9;

        return $this;
    }

    public function getValMusFacElevadorLabioSuperiorIzquierda10(): ?string
    {
        return $this->val_mus_fac_elevador_labio_superior_izquierda_10;
    }

    public function setValMusFacElevadorLabioSuperiorIzquierda10(?string $val_mus_fac_elevador_labio_superior_izquierda_10): self
    {
        $this->val_mus_fac_elevador_labio_superior_izquierda_10 = $val_mus_fac_elevador_labio_superior_izquierda_10;

        return $this;
    }

    public function getValMusFacElevadorLabioSuperiorIzquierda11(): ?string
    {
        return $this->val_mus_fac_elevador_labio_superior_izquierda_11;
    }

    public function setValMusFacElevadorLabioSuperiorIzquierda11(?string $val_mus_fac_elevador_labio_superior_izquierda_11): self
    {
        $this->val_mus_fac_elevador_labio_superior_izquierda_11 = $val_mus_fac_elevador_labio_superior_izquierda_11;

        return $this;
    }

    public function getValMusFacElevadorLabioSuperiorIzquierda12(): ?string
    {
        return $this->val_mus_fac_elevador_labio_superior_izquierda_12;
    }

    public function setValMusFacElevadorLabioSuperiorIzquierda12(?string $val_mus_fac_elevador_labio_superior_izquierda_12): self
    {
        $this->val_mus_fac_elevador_labio_superior_izquierda_12 = $val_mus_fac_elevador_labio_superior_izquierda_12;

        return $this;
    }

    public function getValMusFacDepresorLabioSuperiorDerecha1(): ?string
    {
        return $this->val_mus_fac_depresor_labio_superior_derecha_1;
    }

    public function setValMusFacDepresorLabioSuperiorDerecha1(?string $val_mus_fac_depresor_labio_superior_derecha_1): self
    {
        $this->val_mus_fac_depresor_labio_superior_derecha_1 = $val_mus_fac_depresor_labio_superior_derecha_1;

        return $this;
    }

    public function getValMusFacDepresorLabioSuperiorDerecha2(): ?string
    {
        return $this->val_mus_fac_depresor_labio_superior_derecha_2;
    }

    public function setValMusFacDepresorLabioSuperiorDerecha2(?string $val_mus_fac_depresor_labio_superior_derecha_2): self
    {
        $this->val_mus_fac_depresor_labio_superior_derecha_2 = $val_mus_fac_depresor_labio_superior_derecha_2;

        return $this;
    }

    public function getValMusFacDepresorLabioSuperiorDerecha3(): ?string
    {
        return $this->val_mus_fac_depresor_labio_superior_derecha_3;
    }

    public function setValMusFacDepresorLabioSuperiorDerecha3(?string $val_mus_fac_depresor_labio_superior_derecha_3): self
    {
        $this->val_mus_fac_depresor_labio_superior_derecha_3 = $val_mus_fac_depresor_labio_superior_derecha_3;

        return $this;
    }

    public function getValMusFacDepresorLabioSuperiorDerecha4(): ?string
    {
        return $this->val_mus_fac_depresor_labio_superior_derecha_4;
    }

    public function setValMusFacDepresorLabioSuperiorDerecha4(?string $val_mus_fac_depresor_labio_superior_derecha_4): self
    {
        $this->val_mus_fac_depresor_labio_superior_derecha_4 = $val_mus_fac_depresor_labio_superior_derecha_4;

        return $this;
    }

    public function getValMusFacDepresorLabioSuperiorDerecha5(): ?string
    {
        return $this->val_mus_fac_depresor_labio_superior_derecha_5;
    }

    public function setValMusFacDepresorLabioSuperiorDerecha5(?string $val_mus_fac_depresor_labio_superior_derecha_5): self
    {
        $this->val_mus_fac_depresor_labio_superior_derecha_5 = $val_mus_fac_depresor_labio_superior_derecha_5;

        return $this;
    }

    public function getValMusFacDepresorLabioSuperiorDerecha6(): ?string
    {
        return $this->val_mus_fac_depresor_labio_superior_derecha_6;
    }

    public function setValMusFacDepresorLabioSuperiorDerecha6(?string $val_mus_fac_depresor_labio_superior_derecha_6): self
    {
        $this->val_mus_fac_depresor_labio_superior_derecha_6 = $val_mus_fac_depresor_labio_superior_derecha_6;

        return $this;
    }

    public function getValMusFacDepresorLabioSuperiorDerecha7(): ?string
    {
        return $this->val_mus_fac_depresor_labio_superior_derecha_7;
    }

    public function setValMusFacDepresorLabioSuperiorDerecha7(?string $val_mus_fac_depresor_labio_superior_derecha_7): self
    {
        $this->val_mus_fac_depresor_labio_superior_derecha_7 = $val_mus_fac_depresor_labio_superior_derecha_7;

        return $this;
    }

    public function getValMusFacDepresorLabioSuperiorDerecha8(): ?string
    {
        return $this->val_mus_fac_depresor_labio_superior_derecha_8;
    }

    public function setValMusFacDepresorLabioSuperiorDerecha8(?string $val_mus_fac_depresor_labio_superior_derecha_8): self
    {
        $this->val_mus_fac_depresor_labio_superior_derecha_8 = $val_mus_fac_depresor_labio_superior_derecha_8;

        return $this;
    }

    public function getValMusFacDepresorLabioSuperiorDerecha9(): ?string
    {
        return $this->val_mus_fac_depresor_labio_superior_derecha_9;
    }

    public function setValMusFacDepresorLabioSuperiorDerecha9(?string $val_mus_fac_depresor_labio_superior_derecha_9): self
    {
        $this->val_mus_fac_depresor_labio_superior_derecha_9 = $val_mus_fac_depresor_labio_superior_derecha_9;

        return $this;
    }

    public function getValMusFacDepresorLabioSuperiorDerecha10(): ?string
    {
        return $this->val_mus_fac_depresor_labio_superior_derecha_10;
    }

    public function setValMusFacDepresorLabioSuperiorDerecha10(?string $val_mus_fac_depresor_labio_superior_derecha_10): self
    {
        $this->val_mus_fac_depresor_labio_superior_derecha_10 = $val_mus_fac_depresor_labio_superior_derecha_10;

        return $this;
    }

    public function getValMusFacDepresorLabioSuperiorDerecha11(): ?string
    {
        return $this->val_mus_fac_depresor_labio_superior_derecha_11;
    }

    public function setValMusFacDepresorLabioSuperiorDerecha11(?string $val_mus_fac_depresor_labio_superior_derecha_11): self
    {
        $this->val_mus_fac_depresor_labio_superior_derecha_11 = $val_mus_fac_depresor_labio_superior_derecha_11;

        return $this;
    }

    public function getValMusFacDepresorLabioSuperiorDerecha12(): ?string
    {
        return $this->val_mus_fac_depresor_labio_superior_derecha_12;
    }

    public function setValMusFacDepresorLabioSuperiorDerecha12(?string $val_mus_fac_depresor_labio_superior_derecha_12): self
    {
        $this->val_mus_fac_depresor_labio_superior_derecha_12 = $val_mus_fac_depresor_labio_superior_derecha_12;

        return $this;
    }

    public function getValMusFacDepresorLabioSuperiorIzquierda1(): ?string
    {
        return $this->val_mus_fac_depresor_labio_superior_izquierda_1;
    }

    public function setValMusFacDepresorLabioSuperiorIzquierda1(?string $val_mus_fac_depresor_labio_superior_izquierda_1): self
    {
        $this->val_mus_fac_depresor_labio_superior_izquierda_1 = $val_mus_fac_depresor_labio_superior_izquierda_1;

        return $this;
    }

    public function getValMusFacDepresorLabioSuperiorIzquierda2(): ?string
    {
        return $this->val_mus_fac_depresor_labio_superior_izquierda_2;
    }

    public function setValMusFacDepresorLabioSuperiorIzquierda2(?string $val_mus_fac_depresor_labio_superior_izquierda_2): self
    {
        $this->val_mus_fac_depresor_labio_superior_izquierda_2 = $val_mus_fac_depresor_labio_superior_izquierda_2;

        return $this;
    }

    public function getValMusFacDepresorLabioSuperiorIzquierda3(): ?string
    {
        return $this->val_mus_fac_depresor_labio_superior_izquierda_3;
    }

    public function setValMusFacDepresorLabioSuperiorIzquierda3(?string $val_mus_fac_depresor_labio_superior_izquierda_3): self
    {
        $this->val_mus_fac_depresor_labio_superior_izquierda_3 = $val_mus_fac_depresor_labio_superior_izquierda_3;

        return $this;
    }

    public function getValMusFacDepresorLabioSuperiorIzquierda4(): ?string
    {
        return $this->val_mus_fac_depresor_labio_superior_izquierda_4;
    }

    public function setValMusFacDepresorLabioSuperiorIzquierda4(?string $val_mus_fac_depresor_labio_superior_izquierda_4): self
    {
        $this->val_mus_fac_depresor_labio_superior_izquierda_4 = $val_mus_fac_depresor_labio_superior_izquierda_4;

        return $this;
    }

    public function getValMusFacDepresorLabioSuperiorIzquierda5(): ?string
    {
        return $this->val_mus_fac_depresor_labio_superior_izquierda_5;
    }

    public function setValMusFacDepresorLabioSuperiorIzquierda5(?string $val_mus_fac_depresor_labio_superior_izquierda_5): self
    {
        $this->val_mus_fac_depresor_labio_superior_izquierda_5 = $val_mus_fac_depresor_labio_superior_izquierda_5;

        return $this;
    }

    public function getValMusFacDepresorLabioSuperiorIzquierda6(): ?string
    {
        return $this->val_mus_fac_depresor_labio_superior_izquierda_6;
    }

    public function setValMusFacDepresorLabioSuperiorIzquierda6(?string $val_mus_fac_depresor_labio_superior_izquierda_6): self
    {
        $this->val_mus_fac_depresor_labio_superior_izquierda_6 = $val_mus_fac_depresor_labio_superior_izquierda_6;

        return $this;
    }

    public function getValMusFacDepresorLabioSuperiorIzquierda7(): ?string
    {
        return $this->val_mus_fac_depresor_labio_superior_izquierda_7;
    }

    public function setValMusFacDepresorLabioSuperiorIzquierda7(?string $val_mus_fac_depresor_labio_superior_izquierda_7): self
    {
        $this->val_mus_fac_depresor_labio_superior_izquierda_7 = $val_mus_fac_depresor_labio_superior_izquierda_7;

        return $this;
    }

    public function getValMusFacDepresorLabioSuperiorIzquierda8(): ?string
    {
        return $this->val_mus_fac_depresor_labio_superior_izquierda_8;
    }

    public function setValMusFacDepresorLabioSuperiorIzquierda8(?string $val_mus_fac_depresor_labio_superior_izquierda_8): self
    {
        $this->val_mus_fac_depresor_labio_superior_izquierda_8 = $val_mus_fac_depresor_labio_superior_izquierda_8;

        return $this;
    }

    public function getValMusFacDepresorLabioSuperiorIzquierda9(): ?string
    {
        return $this->val_mus_fac_depresor_labio_superior_izquierda_9;
    }

    public function setValMusFacDepresorLabioSuperiorIzquierda9(?string $val_mus_fac_depresor_labio_superior_izquierda_9): self
    {
        $this->val_mus_fac_depresor_labio_superior_izquierda_9 = $val_mus_fac_depresor_labio_superior_izquierda_9;

        return $this;
    }

    public function getValMusFacDepresorLabioSuperiorIzquierda10(): ?string
    {
        return $this->val_mus_fac_depresor_labio_superior_izquierda_10;
    }

    public function setValMusFacDepresorLabioSuperiorIzquierda10(?string $val_mus_fac_depresor_labio_superior_izquierda_10): self
    {
        $this->val_mus_fac_depresor_labio_superior_izquierda_10 = $val_mus_fac_depresor_labio_superior_izquierda_10;

        return $this;
    }

    public function getValMusFacDepresorLabioSuperiorIzquierda11(): ?string
    {
        return $this->val_mus_fac_depresor_labio_superior_izquierda_11;
    }

    public function setValMusFacDepresorLabioSuperiorIzquierda11(?string $val_mus_fac_depresor_labio_superior_izquierda_11): self
    {
        $this->val_mus_fac_depresor_labio_superior_izquierda_11 = $val_mus_fac_depresor_labio_superior_izquierda_11;

        return $this;
    }

    public function getValMusFacDepresorLabioSuperiorIzquierda12(): ?string
    {
        return $this->val_mus_fac_depresor_labio_superior_izquierda_12;
    }

    public function setValMusFacDepresorLabioSuperiorIzquierda12(?string $val_mus_fac_depresor_labio_superior_izquierda_12): self
    {
        $this->val_mus_fac_depresor_labio_superior_izquierda_12 = $val_mus_fac_depresor_labio_superior_izquierda_12;

        return $this;
    }

    public function getValMusFacDepresorLabioInferiorDerecha1(): ?string
    {
        return $this->val_mus_fac_depresor_labio_inferior_derecha_1;
    }

    public function setValMusFacDepresorLabioInferiorDerecha1(?string $val_mus_fac_depresor_labio_inferior_derecha_1): self
    {
        $this->val_mus_fac_depresor_labio_inferior_derecha_1 = $val_mus_fac_depresor_labio_inferior_derecha_1;

        return $this;
    }

    public function getValMusFacDepresorLabioInferiorDerecha2(): ?string
    {
        return $this->val_mus_fac_depresor_labio_inferior_derecha_2;
    }

    public function setValMusFacDepresorLabioInferiorDerecha2(?string $val_mus_fac_depresor_labio_inferior_derecha_2): self
    {
        $this->val_mus_fac_depresor_labio_inferior_derecha_2 = $val_mus_fac_depresor_labio_inferior_derecha_2;

        return $this;
    }

    public function getValMusFacDepresorLabioInferiorDerecha3(): ?string
    {
        return $this->val_mus_fac_depresor_labio_inferior_derecha_3;
    }

    public function setValMusFacDepresorLabioInferiorDerecha3(?string $val_mus_fac_depresor_labio_inferior_derecha_3): self
    {
        $this->val_mus_fac_depresor_labio_inferior_derecha_3 = $val_mus_fac_depresor_labio_inferior_derecha_3;

        return $this;
    }

    public function getValMusFacDepresorLabioInferiorDerecha4(): ?string
    {
        return $this->val_mus_fac_depresor_labio_inferior_derecha_4;
    }

    public function setValMusFacDepresorLabioInferiorDerecha4(?string $val_mus_fac_depresor_labio_inferior_derecha_4): self
    {
        $this->val_mus_fac_depresor_labio_inferior_derecha_4 = $val_mus_fac_depresor_labio_inferior_derecha_4;

        return $this;
    }

    public function getValMusFacDepresorLabioInferiorDerecha5(): ?string
    {
        return $this->val_mus_fac_depresor_labio_inferior_derecha_5;
    }

    public function setValMusFacDepresorLabioInferiorDerecha5(?string $val_mus_fac_depresor_labio_inferior_derecha_5): self
    {
        $this->val_mus_fac_depresor_labio_inferior_derecha_5 = $val_mus_fac_depresor_labio_inferior_derecha_5;

        return $this;
    }

    public function getValMusFacDepresorLabioInferiorDerecha6(): ?string
    {
        return $this->val_mus_fac_depresor_labio_inferior_derecha_6;
    }

    public function setValMusFacDepresorLabioInferiorDerecha6(?string $val_mus_fac_depresor_labio_inferior_derecha_6): self
    {
        $this->val_mus_fac_depresor_labio_inferior_derecha_6 = $val_mus_fac_depresor_labio_inferior_derecha_6;

        return $this;
    }

    public function getValMusFacDepresorLabioInferiorDerecha7(): ?string
    {
        return $this->val_mus_fac_depresor_labio_inferior_derecha_7;
    }

    public function setValMusFacDepresorLabioInferiorDerecha7(?string $val_mus_fac_depresor_labio_inferior_derecha_7): self
    {
        $this->val_mus_fac_depresor_labio_inferior_derecha_7 = $val_mus_fac_depresor_labio_inferior_derecha_7;

        return $this;
    }

    public function getValMusFacDepresorLabioInferiorDerecha8(): ?string
    {
        return $this->val_mus_fac_depresor_labio_inferior_derecha_8;
    }

    public function setValMusFacDepresorLabioInferiorDerecha8(?string $val_mus_fac_depresor_labio_inferior_derecha_8): self
    {
        $this->val_mus_fac_depresor_labio_inferior_derecha_8 = $val_mus_fac_depresor_labio_inferior_derecha_8;

        return $this;
    }

    public function getValMusFacDepresorLabioInferiorDerecha9(): ?string
    {
        return $this->val_mus_fac_depresor_labio_inferior_derecha_9;
    }

    public function setValMusFacDepresorLabioInferiorDerecha9(?string $val_mus_fac_depresor_labio_inferior_derecha_9): self
    {
        $this->val_mus_fac_depresor_labio_inferior_derecha_9 = $val_mus_fac_depresor_labio_inferior_derecha_9;

        return $this;
    }

    public function getValMusFacDepresorLabioInferiorDerecha10(): ?string
    {
        return $this->val_mus_fac_depresor_labio_inferior_derecha_10;
    }

    public function setValMusFacDepresorLabioInferiorDerecha10(?string $val_mus_fac_depresor_labio_inferior_derecha_10): self
    {
        $this->val_mus_fac_depresor_labio_inferior_derecha_10 = $val_mus_fac_depresor_labio_inferior_derecha_10;

        return $this;
    }

    public function getValMusFacDepresorLabioInferiorDerecha11(): ?string
    {
        return $this->val_mus_fac_depresor_labio_inferior_derecha_11;
    }

    public function setValMusFacDepresorLabioInferiorDerecha11(?string $val_mus_fac_depresor_labio_inferior_derecha_11): self
    {
        $this->val_mus_fac_depresor_labio_inferior_derecha_11 = $val_mus_fac_depresor_labio_inferior_derecha_11;

        return $this;
    }

    public function getValMusFacDepresorLabioInferiorDerecha12(): ?string
    {
        return $this->val_mus_fac_depresor_labio_inferior_derecha_12;
    }

    public function setValMusFacDepresorLabioInferiorDerecha12(?string $val_mus_fac_depresor_labio_inferior_derecha_12): self
    {
        $this->val_mus_fac_depresor_labio_inferior_derecha_12 = $val_mus_fac_depresor_labio_inferior_derecha_12;

        return $this;
    }

    public function getValMusFacDepresorLabioInferiorIzquierda1(): ?string
    {
        return $this->val_mus_fac_depresor_labio_inferior_izquierda_1;
    }

    public function setValMusFacDepresorLabioInferiorIzquierda1(?string $val_mus_fac_depresor_labio_inferior_izquierda_1): self
    {
        $this->val_mus_fac_depresor_labio_inferior_izquierda_1 = $val_mus_fac_depresor_labio_inferior_izquierda_1;

        return $this;
    }

    public function getValMusFacDepresorLabioInferiorIzquierda2(): ?string
    {
        return $this->val_mus_fac_depresor_labio_inferior_izquierda_2;
    }

    public function setValMusFacDepresorLabioInferiorIzquierda2(?string $val_mus_fac_depresor_labio_inferior_izquierda_2): self
    {
        $this->val_mus_fac_depresor_labio_inferior_izquierda_2 = $val_mus_fac_depresor_labio_inferior_izquierda_2;

        return $this;
    }

    public function getValMusFacDepresorLabioInferiorIzquierda3(): ?string
    {
        return $this->val_mus_fac_depresor_labio_inferior_izquierda_3;
    }

    public function setValMusFacDepresorLabioInferiorIzquierda3(?string $val_mus_fac_depresor_labio_inferior_izquierda_3): self
    {
        $this->val_mus_fac_depresor_labio_inferior_izquierda_3 = $val_mus_fac_depresor_labio_inferior_izquierda_3;

        return $this;
    }

    public function getValMusFacDepresorLabioInferiorIzquierda4(): ?string
    {
        return $this->val_mus_fac_depresor_labio_inferior_izquierda_4;
    }

    public function setValMusFacDepresorLabioInferiorIzquierda4(?string $val_mus_fac_depresor_labio_inferior_izquierda_4): self
    {
        $this->val_mus_fac_depresor_labio_inferior_izquierda_4 = $val_mus_fac_depresor_labio_inferior_izquierda_4;

        return $this;
    }

    public function getValMusFacDepresorLabioInferiorIzquierda5(): ?string
    {
        return $this->val_mus_fac_depresor_labio_inferior_izquierda_5;
    }

    public function setValMusFacDepresorLabioInferiorIzquierda5(?string $val_mus_fac_depresor_labio_inferior_izquierda_5): self
    {
        $this->val_mus_fac_depresor_labio_inferior_izquierda_5 = $val_mus_fac_depresor_labio_inferior_izquierda_5;

        return $this;
    }

    public function getValMusFacDepresorLabioInferiorIzquierda6(): ?string
    {
        return $this->val_mus_fac_depresor_labio_inferior_izquierda_6;
    }

    public function setValMusFacDepresorLabioInferiorIzquierda6(?string $val_mus_fac_depresor_labio_inferior_izquierda_6): self
    {
        $this->val_mus_fac_depresor_labio_inferior_izquierda_6 = $val_mus_fac_depresor_labio_inferior_izquierda_6;

        return $this;
    }

    public function getValMusFacDepresorLabioInferiorIzquierda7(): ?string
    {
        return $this->val_mus_fac_depresor_labio_inferior_izquierda_7;
    }

    public function setValMusFacDepresorLabioInferiorIzquierda7(?string $val_mus_fac_depresor_labio_inferior_izquierda_7): self
    {
        $this->val_mus_fac_depresor_labio_inferior_izquierda_7 = $val_mus_fac_depresor_labio_inferior_izquierda_7;

        return $this;
    }

    public function getValMusFacDepresorLabioInferiorIzquierda8(): ?string
    {
        return $this->val_mus_fac_depresor_labio_inferior_izquierda_8;
    }

    public function setValMusFacDepresorLabioInferiorIzquierda8(?string $val_mus_fac_depresor_labio_inferior_izquierda_8): self
    {
        $this->val_mus_fac_depresor_labio_inferior_izquierda_8 = $val_mus_fac_depresor_labio_inferior_izquierda_8;

        return $this;
    }

    public function getValMusFacDepresorLabioInferiorIzquierda9(): ?string
    {
        return $this->val_mus_fac_depresor_labio_inferior_izquierda_9;
    }

    public function setValMusFacDepresorLabioInferiorIzquierda9(?string $val_mus_fac_depresor_labio_inferior_izquierda_9): self
    {
        $this->val_mus_fac_depresor_labio_inferior_izquierda_9 = $val_mus_fac_depresor_labio_inferior_izquierda_9;

        return $this;
    }

    public function getValMusFacDepresorLabioInferiorIzquierda10(): ?string
    {
        return $this->val_mus_fac_depresor_labio_inferior_izquierda_10;
    }

    public function setValMusFacDepresorLabioInferiorIzquierda10(?string $val_mus_fac_depresor_labio_inferior_izquierda_10): self
    {
        $this->val_mus_fac_depresor_labio_inferior_izquierda_10 = $val_mus_fac_depresor_labio_inferior_izquierda_10;

        return $this;
    }

    public function getValMusFacDepresorLabioInferiorIzquierda11(): ?string
    {
        return $this->val_mus_fac_depresor_labio_inferior_izquierda_11;
    }

    public function setValMusFacDepresorLabioInferiorIzquierda11(?string $val_mus_fac_depresor_labio_inferior_izquierda_11): self
    {
        $this->val_mus_fac_depresor_labio_inferior_izquierda_11 = $val_mus_fac_depresor_labio_inferior_izquierda_11;

        return $this;
    }

    public function getValMusFacDepresorLabioInferiorIzquierda12(): ?string
    {
        return $this->val_mus_fac_depresor_labio_inferior_izquierda_12;
    }

    public function setValMusFacDepresorLabioInferiorIzquierda12(?string $val_mus_fac_depresor_labio_inferior_izquierda_12): self
    {
        $this->val_mus_fac_depresor_labio_inferior_izquierda_12 = $val_mus_fac_depresor_labio_inferior_izquierda_12;

        return $this;
    }

    public function getValMusFacCaninoDerecha1(): ?string
    {
        return $this->val_mus_fac_canino_derecha_1;
    }

    public function setValMusFacCaninoDerecha1(?string $val_mus_fac_canino_derecha_1): self
    {
        $this->val_mus_fac_canino_derecha_1 = $val_mus_fac_canino_derecha_1;

        return $this;
    }

    public function getValMusFacCaninoDerecha2(): ?string
    {
        return $this->val_mus_fac_canino_derecha_2;
    }

    public function setValMusFacCaninoDerecha2(?string $val_mus_fac_canino_derecha_2): self
    {
        $this->val_mus_fac_canino_derecha_2 = $val_mus_fac_canino_derecha_2;

        return $this;
    }

    public function getValMusFacCaninoDerecha3(): ?string
    {
        return $this->val_mus_fac_canino_derecha_3;
    }

    public function setValMusFacCaninoDerecha3(?string $val_mus_fac_canino_derecha_3): self
    {
        $this->val_mus_fac_canino_derecha_3 = $val_mus_fac_canino_derecha_3;

        return $this;
    }

    public function getValMusFacCaninoDerecha4(): ?string
    {
        return $this->val_mus_fac_canino_derecha_4;
    }

    public function setValMusFacCaninoDerecha4(?string $val_mus_fac_canino_derecha_4): self
    {
        $this->val_mus_fac_canino_derecha_4 = $val_mus_fac_canino_derecha_4;

        return $this;
    }

    public function getValMusFacCaninoDerecha5(): ?string
    {
        return $this->val_mus_fac_canino_derecha_5;
    }

    public function setValMusFacCaninoDerecha5(?string $val_mus_fac_canino_derecha_5): self
    {
        $this->val_mus_fac_canino_derecha_5 = $val_mus_fac_canino_derecha_5;

        return $this;
    }

    public function getValMusFacCaninoDerecha6(): ?string
    {
        return $this->val_mus_fac_canino_derecha_6;
    }

    public function setValMusFacCaninoDerecha6(?string $val_mus_fac_canino_derecha_6): self
    {
        $this->val_mus_fac_canino_derecha_6 = $val_mus_fac_canino_derecha_6;

        return $this;
    }

    public function getValMusFacCaninoDerecha7(): ?string
    {
        return $this->val_mus_fac_canino_derecha_7;
    }

    public function setValMusFacCaninoDerecha7(?string $val_mus_fac_canino_derecha_7): self
    {
        $this->val_mus_fac_canino_derecha_7 = $val_mus_fac_canino_derecha_7;

        return $this;
    }

    public function getValMusFacCaninoDerecha8(): ?string
    {
        return $this->val_mus_fac_canino_derecha_8;
    }

    public function setValMusFacCaninoDerecha8(?string $val_mus_fac_canino_derecha_8): self
    {
        $this->val_mus_fac_canino_derecha_8 = $val_mus_fac_canino_derecha_8;

        return $this;
    }

    public function getValMusFacCaninoDerecha9(): ?string
    {
        return $this->val_mus_fac_canino_derecha_9;
    }

    public function setValMusFacCaninoDerecha9(?string $val_mus_fac_canino_derecha_9): self
    {
        $this->val_mus_fac_canino_derecha_9 = $val_mus_fac_canino_derecha_9;

        return $this;
    }

    public function getValMusFacCaninoDerecha10(): ?string
    {
        return $this->val_mus_fac_canino_derecha_10;
    }

    public function setValMusFacCaninoDerecha10(?string $val_mus_fac_canino_derecha_10): self
    {
        $this->val_mus_fac_canino_derecha_10 = $val_mus_fac_canino_derecha_10;

        return $this;
    }

    public function getValMusFacCaninoDerecha11(): ?string
    {
        return $this->val_mus_fac_canino_derecha_11;
    }

    public function setValMusFacCaninoDerecha11(?string $val_mus_fac_canino_derecha_11): self
    {
        $this->val_mus_fac_canino_derecha_11 = $val_mus_fac_canino_derecha_11;

        return $this;
    }

    public function getValMusFacCaninoDerecha12(): ?string
    {
        return $this->val_mus_fac_canino_derecha_12;
    }

    public function setValMusFacCaninoDerecha12(?string $val_mus_fac_canino_derecha_12): self
    {
        $this->val_mus_fac_canino_derecha_12 = $val_mus_fac_canino_derecha_12;

        return $this;
    }

    public function getValMusFacCaninoIzquierda1(): ?string
    {
        return $this->val_mus_fac_canino_izquierda_1;
    }

    public function setValMusFacCaninoIzquierda1(?string $val_mus_fac_canino_izquierda_1): self
    {
        $this->val_mus_fac_canino_izquierda_1 = $val_mus_fac_canino_izquierda_1;

        return $this;
    }

    public function getValMusFacCaninoIzquierda2(): ?string
    {
        return $this->val_mus_fac_canino_izquierda_2;
    }

    public function setValMusFacCaninoIzquierda2(?string $val_mus_fac_canino_izquierda_2): self
    {
        $this->val_mus_fac_canino_izquierda_2 = $val_mus_fac_canino_izquierda_2;

        return $this;
    }

    public function getValMusFacCaninoIzquierda3(): ?string
    {
        return $this->val_mus_fac_canino_izquierda_3;
    }

    public function setValMusFacCaninoIzquierda3(?string $val_mus_fac_canino_izquierda_3): self
    {
        $this->val_mus_fac_canino_izquierda_3 = $val_mus_fac_canino_izquierda_3;

        return $this;
    }

    public function getValMusFacCaninoIzquierda4(): ?string
    {
        return $this->val_mus_fac_canino_izquierda_4;
    }

    public function setValMusFacCaninoIzquierda4(?string $val_mus_fac_canino_izquierda_4): self
    {
        $this->val_mus_fac_canino_izquierda_4 = $val_mus_fac_canino_izquierda_4;

        return $this;
    }

    public function getValMusFacCaninoIzquierda5(): ?string
    {
        return $this->val_mus_fac_canino_izquierda_5;
    }

    public function setValMusFacCaninoIzquierda5(?string $val_mus_fac_canino_izquierda_5): self
    {
        $this->val_mus_fac_canino_izquierda_5 = $val_mus_fac_canino_izquierda_5;

        return $this;
    }

    public function getValMusFacCaninoIzquierda6(): ?string
    {
        return $this->val_mus_fac_canino_izquierda_6;
    }

    public function setValMusFacCaninoIzquierda6(?string $val_mus_fac_canino_izquierda_6): self
    {
        $this->val_mus_fac_canino_izquierda_6 = $val_mus_fac_canino_izquierda_6;

        return $this;
    }

    public function getValMusFacCaninoIzquierda7(): ?string
    {
        return $this->val_mus_fac_canino_izquierda_7;
    }

    public function setValMusFacCaninoIzquierda7(?string $val_mus_fac_canino_izquierda_7): self
    {
        $this->val_mus_fac_canino_izquierda_7 = $val_mus_fac_canino_izquierda_7;

        return $this;
    }

    public function getValMusFacCaninoIzquierda8(): ?string
    {
        return $this->val_mus_fac_canino_izquierda_8;
    }

    public function setValMusFacCaninoIzquierda8(?string $val_mus_fac_canino_izquierda_8): self
    {
        $this->val_mus_fac_canino_izquierda_8 = $val_mus_fac_canino_izquierda_8;

        return $this;
    }

    public function getValMusFacCaninoIzquierda9(): ?string
    {
        return $this->val_mus_fac_canino_izquierda_9;
    }

    public function setValMusFacCaninoIzquierda9(?string $val_mus_fac_canino_izquierda_9): self
    {
        $this->val_mus_fac_canino_izquierda_9 = $val_mus_fac_canino_izquierda_9;

        return $this;
    }

    public function getValMusFacCaninoIzquierda10(): ?string
    {
        return $this->val_mus_fac_canino_izquierda_10;
    }

    public function setValMusFacCaninoIzquierda10(?string $val_mus_fac_canino_izquierda_10): self
    {
        $this->val_mus_fac_canino_izquierda_10 = $val_mus_fac_canino_izquierda_10;

        return $this;
    }

    public function getValMusFacCaninoIzquierda11(): ?string
    {
        return $this->val_mus_fac_canino_izquierda_11;
    }

    public function setValMusFacCaninoIzquierda11(?string $val_mus_fac_canino_izquierda_11): self
    {
        $this->val_mus_fac_canino_izquierda_11 = $val_mus_fac_canino_izquierda_11;

        return $this;
    }

    public function getValMusFacCaninoIzquierda12(): ?string
    {
        return $this->val_mus_fac_canino_izquierda_12;
    }

    public function setValMusFacCaninoIzquierda12(?string $val_mus_fac_canino_izquierda_12): self
    {
        $this->val_mus_fac_canino_izquierda_12 = $val_mus_fac_canino_izquierda_12;

        return $this;
    }

    public function getValMusFacZigomaticoDerecha1(): ?string
    {
        return $this->val_mus_fac_zigomatico_derecha_1;
    }

    public function setValMusFacZigomaticoDerecha1(?string $val_mus_fac_zigomatico_derecha_1): self
    {
        $this->val_mus_fac_zigomatico_derecha_1 = $val_mus_fac_zigomatico_derecha_1;

        return $this;
    }

    public function getValMusFacZigomaticoDerecha2(): ?string
    {
        return $this->val_mus_fac_zigomatico_derecha_2;
    }

    public function setValMusFacZigomaticoDerecha2(?string $val_mus_fac_zigomatico_derecha_2): self
    {
        $this->val_mus_fac_zigomatico_derecha_2 = $val_mus_fac_zigomatico_derecha_2;

        return $this;
    }

    public function getValMusFacZigomaticoDerecha3(): ?string
    {
        return $this->val_mus_fac_zigomatico_derecha_3;
    }

    public function setValMusFacZigomaticoDerecha3(?string $val_mus_fac_zigomatico_derecha_3): self
    {
        $this->val_mus_fac_zigomatico_derecha_3 = $val_mus_fac_zigomatico_derecha_3;

        return $this;
    }

    public function getValMusFacZigomaticoDerecha4(): ?string
    {
        return $this->val_mus_fac_zigomatico_derecha_4;
    }

    public function setValMusFacZigomaticoDerecha4(?string $val_mus_fac_zigomatico_derecha_4): self
    {
        $this->val_mus_fac_zigomatico_derecha_4 = $val_mus_fac_zigomatico_derecha_4;

        return $this;
    }

    public function getValMusFacZigomaticoDerecha5(): ?string
    {
        return $this->val_mus_fac_zigomatico_derecha_5;
    }

    public function setValMusFacZigomaticoDerecha5(?string $val_mus_fac_zigomatico_derecha_5): self
    {
        $this->val_mus_fac_zigomatico_derecha_5 = $val_mus_fac_zigomatico_derecha_5;

        return $this;
    }

    public function getValMusFacZigomaticoDerecha6(): ?string
    {
        return $this->val_mus_fac_zigomatico_derecha_6;
    }

    public function setValMusFacZigomaticoDerecha6(?string $val_mus_fac_zigomatico_derecha_6): self
    {
        $this->val_mus_fac_zigomatico_derecha_6 = $val_mus_fac_zigomatico_derecha_6;

        return $this;
    }

    public function getValMusFacZigomaticoDerecha7(): ?string
    {
        return $this->val_mus_fac_zigomatico_derecha_7;
    }

    public function setValMusFacZigomaticoDerecha7(?string $val_mus_fac_zigomatico_derecha_7): self
    {
        $this->val_mus_fac_zigomatico_derecha_7 = $val_mus_fac_zigomatico_derecha_7;

        return $this;
    }

    public function getValMusFacZigomaticoDerecha8(): ?string
    {
        return $this->val_mus_fac_zigomatico_derecha_8;
    }

    public function setValMusFacZigomaticoDerecha8(?string $val_mus_fac_zigomatico_derecha_8): self
    {
        $this->val_mus_fac_zigomatico_derecha_8 = $val_mus_fac_zigomatico_derecha_8;

        return $this;
    }

    public function getValMusFacZigomaticoDerecha9(): ?string
    {
        return $this->val_mus_fac_zigomatico_derecha_9;
    }

    public function setValMusFacZigomaticoDerecha9(?string $val_mus_fac_zigomatico_derecha_9): self
    {
        $this->val_mus_fac_zigomatico_derecha_9 = $val_mus_fac_zigomatico_derecha_9;

        return $this;
    }

    public function getValMusFacZigomaticoDerecha10(): ?string
    {
        return $this->val_mus_fac_zigomatico_derecha_10;
    }

    public function setValMusFacZigomaticoDerecha10(?string $val_mus_fac_zigomatico_derecha_10): self
    {
        $this->val_mus_fac_zigomatico_derecha_10 = $val_mus_fac_zigomatico_derecha_10;

        return $this;
    }

    public function getValMusFacZigomaticoDerecha11(): ?string
    {
        return $this->val_mus_fac_zigomatico_derecha_11;
    }

    public function setValMusFacZigomaticoDerecha11(?string $val_mus_fac_zigomatico_derecha_11): self
    {
        $this->val_mus_fac_zigomatico_derecha_11 = $val_mus_fac_zigomatico_derecha_11;

        return $this;
    }

    public function getValMusFacZigomaticoDerecha12(): ?string
    {
        return $this->val_mus_fac_zigomatico_derecha_12;
    }

    public function setValMusFacZigomaticoDerecha12(?string $val_mus_fac_zigomatico_derecha_12): self
    {
        $this->val_mus_fac_zigomatico_derecha_12 = $val_mus_fac_zigomatico_derecha_12;

        return $this;
    }

    public function getValMusFacZigomaticoIzquierda1(): ?string
    {
        return $this->val_mus_fac_zigomatico_izquierda_1;
    }

    public function setValMusFacZigomaticoIzquierda1(?string $val_mus_fac_zigomatico_izquierda_1): self
    {
        $this->val_mus_fac_zigomatico_izquierda_1 = $val_mus_fac_zigomatico_izquierda_1;

        return $this;
    }

    public function getValMusFacZigomaticoIzquierda2(): ?string
    {
        return $this->val_mus_fac_zigomatico_izquierda_2;
    }

    public function setValMusFacZigomaticoIzquierda2(?string $val_mus_fac_zigomatico_izquierda_2): self
    {
        $this->val_mus_fac_zigomatico_izquierda_2 = $val_mus_fac_zigomatico_izquierda_2;

        return $this;
    }

    public function getValMusFacZigomaticoIzquierda3(): ?string
    {
        return $this->val_mus_fac_zigomatico_izquierda_3;
    }

    public function setValMusFacZigomaticoIzquierda3(?string $val_mus_fac_zigomatico_izquierda_3): self
    {
        $this->val_mus_fac_zigomatico_izquierda_3 = $val_mus_fac_zigomatico_izquierda_3;

        return $this;
    }

    public function getValMusFacZigomaticoIzquierda4(): ?string
    {
        return $this->val_mus_fac_zigomatico_izquierda_4;
    }

    public function setValMusFacZigomaticoIzquierda4(?string $val_mus_fac_zigomatico_izquierda_4): self
    {
        $this->val_mus_fac_zigomatico_izquierda_4 = $val_mus_fac_zigomatico_izquierda_4;

        return $this;
    }

    public function getValMusFacZigomaticoIzquierda5(): ?string
    {
        return $this->val_mus_fac_zigomatico_izquierda_5;
    }

    public function setValMusFacZigomaticoIzquierda5(?string $val_mus_fac_zigomatico_izquierda_5): self
    {
        $this->val_mus_fac_zigomatico_izquierda_5 = $val_mus_fac_zigomatico_izquierda_5;

        return $this;
    }

    public function getValMusFacZigomaticoIzquierda6(): ?string
    {
        return $this->val_mus_fac_zigomatico_izquierda_6;
    }

    public function setValMusFacZigomaticoIzquierda6(?string $val_mus_fac_zigomatico_izquierda_6): self
    {
        $this->val_mus_fac_zigomatico_izquierda_6 = $val_mus_fac_zigomatico_izquierda_6;

        return $this;
    }

    public function getValMusFacZigomaticoIzquierda7(): ?string
    {
        return $this->val_mus_fac_zigomatico_izquierda_7;
    }

    public function setValMusFacZigomaticoIzquierda7(?string $val_mus_fac_zigomatico_izquierda_7): self
    {
        $this->val_mus_fac_zigomatico_izquierda_7 = $val_mus_fac_zigomatico_izquierda_7;

        return $this;
    }

    public function getValMusFacZigomaticoIzquierda8(): ?string
    {
        return $this->val_mus_fac_zigomatico_izquierda_8;
    }

    public function setValMusFacZigomaticoIzquierda8(?string $val_mus_fac_zigomatico_izquierda_8): self
    {
        $this->val_mus_fac_zigomatico_izquierda_8 = $val_mus_fac_zigomatico_izquierda_8;

        return $this;
    }

    public function getValMusFacZigomaticoIzquierda9(): ?string
    {
        return $this->val_mus_fac_zigomatico_izquierda_9;
    }

    public function setValMusFacZigomaticoIzquierda9(?string $val_mus_fac_zigomatico_izquierda_9): self
    {
        $this->val_mus_fac_zigomatico_izquierda_9 = $val_mus_fac_zigomatico_izquierda_9;

        return $this;
    }

    public function getValMusFacZigomaticoIzquierda10(): ?string
    {
        return $this->val_mus_fac_zigomatico_izquierda_10;
    }

    public function setValMusFacZigomaticoIzquierda10(?string $val_mus_fac_zigomatico_izquierda_10): self
    {
        $this->val_mus_fac_zigomatico_izquierda_10 = $val_mus_fac_zigomatico_izquierda_10;

        return $this;
    }

    public function getValMusFacZigomaticoIzquierda11(): ?string
    {
        return $this->val_mus_fac_zigomatico_izquierda_11;
    }

    public function setValMusFacZigomaticoIzquierda11(?string $val_mus_fac_zigomatico_izquierda_11): self
    {
        $this->val_mus_fac_zigomatico_izquierda_11 = $val_mus_fac_zigomatico_izquierda_11;

        return $this;
    }

    public function getValMusFacZigomaticoIzquierda12(): ?string
    {
        return $this->val_mus_fac_zigomatico_izquierda_12;
    }

    public function setValMusFacZigomaticoIzquierda12(?string $val_mus_fac_zigomatico_izquierda_12): self
    {
        $this->val_mus_fac_zigomatico_izquierda_12 = $val_mus_fac_zigomatico_izquierda_12;

        return $this;
    }

    public function getValMusFacRisorioDerecha1(): ?string
    {
        return $this->val_mus_fac_risorio_derecha_1;
    }

    public function setValMusFacRisorioDerecha1(?string $val_mus_fac_risorio_derecha_1): self
    {
        $this->val_mus_fac_risorio_derecha_1 = $val_mus_fac_risorio_derecha_1;

        return $this;
    }

    public function getValMusFacRisorioDerecha2(): ?string
    {
        return $this->val_mus_fac_risorio_derecha_2;
    }

    public function setValMusFacRisorioDerecha2(?string $val_mus_fac_risorio_derecha_2): self
    {
        $this->val_mus_fac_risorio_derecha_2 = $val_mus_fac_risorio_derecha_2;

        return $this;
    }

    public function getValMusFacRisorioDerecha3(): ?string
    {
        return $this->val_mus_fac_risorio_derecha_3;
    }

    public function setValMusFacRisorioDerecha3(?string $val_mus_fac_risorio_derecha_3): self
    {
        $this->val_mus_fac_risorio_derecha_3 = $val_mus_fac_risorio_derecha_3;

        return $this;
    }

    public function getValMusFacRisorioDerecha4(): ?string
    {
        return $this->val_mus_fac_risorio_derecha_4;
    }

    public function setValMusFacRisorioDerecha4(?string $val_mus_fac_risorio_derecha_4): self
    {
        $this->val_mus_fac_risorio_derecha_4 = $val_mus_fac_risorio_derecha_4;

        return $this;
    }

    public function getValMusFacRisorioDerecha5(): ?string
    {
        return $this->val_mus_fac_risorio_derecha_5;
    }

    public function setValMusFacRisorioDerecha5(?string $val_mus_fac_risorio_derecha_5): self
    {
        $this->val_mus_fac_risorio_derecha_5 = $val_mus_fac_risorio_derecha_5;

        return $this;
    }

    public function getValMusFacRisorioDerecha6(): ?string
    {
        return $this->val_mus_fac_risorio_derecha_6;
    }

    public function setValMusFacRisorioDerecha6(?string $val_mus_fac_risorio_derecha_6): self
    {
        $this->val_mus_fac_risorio_derecha_6 = $val_mus_fac_risorio_derecha_6;

        return $this;
    }

    public function getValMusFacRisorioDerecha7(): ?string
    {
        return $this->val_mus_fac_risorio_derecha_7;
    }

    public function setValMusFacRisorioDerecha7(?string $val_mus_fac_risorio_derecha_7): self
    {
        $this->val_mus_fac_risorio_derecha_7 = $val_mus_fac_risorio_derecha_7;

        return $this;
    }

    public function getValMusFacRisorioDerecha8(): ?string
    {
        return $this->val_mus_fac_risorio_derecha_8;
    }

    public function setValMusFacRisorioDerecha8(?string $val_mus_fac_risorio_derecha_8): self
    {
        $this->val_mus_fac_risorio_derecha_8 = $val_mus_fac_risorio_derecha_8;

        return $this;
    }

    public function getValMusFacRisorioDerecha9(): ?string
    {
        return $this->val_mus_fac_risorio_derecha_9;
    }

    public function setValMusFacRisorioDerecha9(?string $val_mus_fac_risorio_derecha_9): self
    {
        $this->val_mus_fac_risorio_derecha_9 = $val_mus_fac_risorio_derecha_9;

        return $this;
    }

    public function getValMusFacRisorioDerecha10(): ?string
    {
        return $this->val_mus_fac_risorio_derecha_10;
    }

    public function setValMusFacRisorioDerecha10(?string $val_mus_fac_risorio_derecha_10): self
    {
        $this->val_mus_fac_risorio_derecha_10 = $val_mus_fac_risorio_derecha_10;

        return $this;
    }

    public function getValMusFacRisorioDerecha11(): ?string
    {
        return $this->val_mus_fac_risorio_derecha_11;
    }

    public function setValMusFacRisorioDerecha11(?string $val_mus_fac_risorio_derecha_11): self
    {
        $this->val_mus_fac_risorio_derecha_11 = $val_mus_fac_risorio_derecha_11;

        return $this;
    }

    public function getValMusFacRisorioDerecha12(): ?string
    {
        return $this->val_mus_fac_risorio_derecha_12;
    }

    public function setValMusFacRisorioDerecha12(?string $val_mus_fac_risorio_derecha_12): self
    {
        $this->val_mus_fac_risorio_derecha_12 = $val_mus_fac_risorio_derecha_12;

        return $this;
    }

    public function getValMusFacRisorioIzquierda1(): ?string
    {
        return $this->val_mus_fac_risorio_izquierda_1;
    }

    public function setValMusFacRisorioIzquierda1(?string $val_mus_fac_risorio_izquierda_1): self
    {
        $this->val_mus_fac_risorio_izquierda_1 = $val_mus_fac_risorio_izquierda_1;

        return $this;
    }

    public function getValMusFacRisorioIzquierda2(): ?string
    {
        return $this->val_mus_fac_risorio_izquierda_2;
    }

    public function setValMusFacRisorioIzquierda2(?string $val_mus_fac_risorio_izquierda_2): self
    {
        $this->val_mus_fac_risorio_izquierda_2 = $val_mus_fac_risorio_izquierda_2;

        return $this;
    }

    public function getValMusFacRisorioIzquierda3(): ?string
    {
        return $this->val_mus_fac_risorio_izquierda_3;
    }

    public function setValMusFacRisorioIzquierda3(?string $val_mus_fac_risorio_izquierda_3): self
    {
        $this->val_mus_fac_risorio_izquierda_3 = $val_mus_fac_risorio_izquierda_3;

        return $this;
    }

    public function getValMusFacRisorioIzquierda4(): ?string
    {
        return $this->val_mus_fac_risorio_izquierda_4;
    }

    public function setValMusFacRisorioIzquierda4(?string $val_mus_fac_risorio_izquierda_4): self
    {
        $this->val_mus_fac_risorio_izquierda_4 = $val_mus_fac_risorio_izquierda_4;

        return $this;
    }

    public function getValMusFacRisorioIzquierda5(): ?string
    {
        return $this->val_mus_fac_risorio_izquierda_5;
    }

    public function setValMusFacRisorioIzquierda5(?string $val_mus_fac_risorio_izquierda_5): self
    {
        $this->val_mus_fac_risorio_izquierda_5 = $val_mus_fac_risorio_izquierda_5;

        return $this;
    }

    public function getValMusFacRisorioIzquierda6(): ?string
    {
        return $this->val_mus_fac_risorio_izquierda_6;
    }

    public function setValMusFacRisorioIzquierda6(?string $val_mus_fac_risorio_izquierda_6): self
    {
        $this->val_mus_fac_risorio_izquierda_6 = $val_mus_fac_risorio_izquierda_6;

        return $this;
    }

    public function getValMusFacRisorioIzquierda7(): ?string
    {
        return $this->val_mus_fac_risorio_izquierda_7;
    }

    public function setValMusFacRisorioIzquierda7(?string $val_mus_fac_risorio_izquierda_7): self
    {
        $this->val_mus_fac_risorio_izquierda_7 = $val_mus_fac_risorio_izquierda_7;

        return $this;
    }

    public function getValMusFacRisorioIzquierda8(): ?string
    {
        return $this->val_mus_fac_risorio_izquierda_8;
    }

    public function setValMusFacRisorioIzquierda8(?string $val_mus_fac_risorio_izquierda_8): self
    {
        $this->val_mus_fac_risorio_izquierda_8 = $val_mus_fac_risorio_izquierda_8;

        return $this;
    }

    public function getValMusFacRisorioIzquierda9(): ?string
    {
        return $this->val_mus_fac_risorio_izquierda_9;
    }

    public function setValMusFacRisorioIzquierda9(?string $val_mus_fac_risorio_izquierda_9): self
    {
        $this->val_mus_fac_risorio_izquierda_9 = $val_mus_fac_risorio_izquierda_9;

        return $this;
    }

    public function getValMusFacRisorioIzquierda10(): ?string
    {
        return $this->val_mus_fac_risorio_izquierda_10;
    }

    public function setValMusFacRisorioIzquierda10(?string $val_mus_fac_risorio_izquierda_10): self
    {
        $this->val_mus_fac_risorio_izquierda_10 = $val_mus_fac_risorio_izquierda_10;

        return $this;
    }

    public function getValMusFacRisorioIzquierda11(): ?string
    {
        return $this->val_mus_fac_risorio_izquierda_11;
    }

    public function setValMusFacRisorioIzquierda11(?string $val_mus_fac_risorio_izquierda_11): self
    {
        $this->val_mus_fac_risorio_izquierda_11 = $val_mus_fac_risorio_izquierda_11;

        return $this;
    }

    public function getValMusFacRisorioIzquierda12(): ?string
    {
        return $this->val_mus_fac_risorio_izquierda_12;
    }

    public function setValMusFacRisorioIzquierda12(?string $val_mus_fac_risorio_izquierda_12): self
    {
        $this->val_mus_fac_risorio_izquierda_12 = $val_mus_fac_risorio_izquierda_12;

        return $this;
    }

    public function getValMusFacBuccinadorDerecha1(): ?string
    {
        return $this->val_mus_fac_buccinador_derecha_1;
    }

    public function setValMusFacBuccinadorDerecha1(?string $val_mus_fac_buccinador_derecha_1): self
    {
        $this->val_mus_fac_buccinador_derecha_1 = $val_mus_fac_buccinador_derecha_1;

        return $this;
    }

    public function getValMusFacBuccinadorDerecha2(): ?string
    {
        return $this->val_mus_fac_buccinador_derecha_2;
    }

    public function setValMusFacBuccinadorDerecha2(?string $val_mus_fac_buccinador_derecha_2): self
    {
        $this->val_mus_fac_buccinador_derecha_2 = $val_mus_fac_buccinador_derecha_2;

        return $this;
    }

    public function getValMusFacBuccinadorDerecha3(): ?string
    {
        return $this->val_mus_fac_buccinador_derecha_3;
    }

    public function setValMusFacBuccinadorDerecha3(?string $val_mus_fac_buccinador_derecha_3): self
    {
        $this->val_mus_fac_buccinador_derecha_3 = $val_mus_fac_buccinador_derecha_3;

        return $this;
    }

    public function getValMusFacBuccinadorDerecha4(): ?string
    {
        return $this->val_mus_fac_buccinador_derecha_4;
    }

    public function setValMusFacBuccinadorDerecha4(?string $val_mus_fac_buccinador_derecha_4): self
    {
        $this->val_mus_fac_buccinador_derecha_4 = $val_mus_fac_buccinador_derecha_4;

        return $this;
    }

    public function getValMusFacBuccinadorDerecha5(): ?string
    {
        return $this->val_mus_fac_buccinador_derecha_5;
    }

    public function setValMusFacBuccinadorDerecha5(?string $val_mus_fac_buccinador_derecha_5): self
    {
        $this->val_mus_fac_buccinador_derecha_5 = $val_mus_fac_buccinador_derecha_5;

        return $this;
    }

    public function getValMusFacBuccinadorDerecha6(): ?string
    {
        return $this->val_mus_fac_buccinador_derecha_6;
    }

    public function setValMusFacBuccinadorDerecha6(?string $val_mus_fac_buccinador_derecha_6): self
    {
        $this->val_mus_fac_buccinador_derecha_6 = $val_mus_fac_buccinador_derecha_6;

        return $this;
    }

    public function getValMusFacBuccinadorDerecha7(): ?string
    {
        return $this->val_mus_fac_buccinador_derecha_7;
    }

    public function setValMusFacBuccinadorDerecha7(?string $val_mus_fac_buccinador_derecha_7): self
    {
        $this->val_mus_fac_buccinador_derecha_7 = $val_mus_fac_buccinador_derecha_7;

        return $this;
    }

    public function getValMusFacBuccinadorDerecha8(): ?string
    {
        return $this->val_mus_fac_buccinador_derecha_8;
    }

    public function setValMusFacBuccinadorDerecha8(?string $val_mus_fac_buccinador_derecha_8): self
    {
        $this->val_mus_fac_buccinador_derecha_8 = $val_mus_fac_buccinador_derecha_8;

        return $this;
    }

    public function getValMusFacBuccinadorDerecha9(): ?string
    {
        return $this->val_mus_fac_buccinador_derecha_9;
    }

    public function setValMusFacBuccinadorDerecha9(?string $val_mus_fac_buccinador_derecha_9): self
    {
        $this->val_mus_fac_buccinador_derecha_9 = $val_mus_fac_buccinador_derecha_9;

        return $this;
    }

    public function getValMusFacBuccinadorDerecha10(): ?string
    {
        return $this->val_mus_fac_buccinador_derecha_10;
    }

    public function setValMusFacBuccinadorDerecha10(?string $val_mus_fac_buccinador_derecha_10): self
    {
        $this->val_mus_fac_buccinador_derecha_10 = $val_mus_fac_buccinador_derecha_10;

        return $this;
    }

    public function getValMusFacBuccinadorDerecha11(): ?string
    {
        return $this->val_mus_fac_buccinador_derecha_11;
    }

    public function setValMusFacBuccinadorDerecha11(?string $val_mus_fac_buccinador_derecha_11): self
    {
        $this->val_mus_fac_buccinador_derecha_11 = $val_mus_fac_buccinador_derecha_11;

        return $this;
    }

    public function getValMusFacBuccinadorDerecha12(): ?string
    {
        return $this->val_mus_fac_buccinador_derecha_12;
    }

    public function setValMusFacBuccinadorDerecha12(?string $val_mus_fac_buccinador_derecha_12): self
    {
        $this->val_mus_fac_buccinador_derecha_12 = $val_mus_fac_buccinador_derecha_12;

        return $this;
    }

    public function getValMusFacBuccinadorIzquierda1(): ?string
    {
        return $this->val_mus_fac_buccinador_izquierda_1;
    }

    public function setValMusFacBuccinadorIzquierda1(?string $val_mus_fac_buccinador_izquierda_1): self
    {
        $this->val_mus_fac_buccinador_izquierda_1 = $val_mus_fac_buccinador_izquierda_1;

        return $this;
    }

    public function getValMusFacBuccinadorIzquierda2(): ?string
    {
        return $this->val_mus_fac_buccinador_izquierda_2;
    }

    public function setValMusFacBuccinadorIzquierda2(?string $val_mus_fac_buccinador_izquierda_2): self
    {
        $this->val_mus_fac_buccinador_izquierda_2 = $val_mus_fac_buccinador_izquierda_2;

        return $this;
    }

    public function getValMusFacBuccinadorIzquierda3(): ?string
    {
        return $this->val_mus_fac_buccinador_izquierda_3;
    }

    public function setValMusFacBuccinadorIzquierda3(?string $val_mus_fac_buccinador_izquierda_3): self
    {
        $this->val_mus_fac_buccinador_izquierda_3 = $val_mus_fac_buccinador_izquierda_3;

        return $this;
    }

    public function getValMusFacBuccinadorIzquierda4(): ?string
    {
        return $this->val_mus_fac_buccinador_izquierda_4;
    }

    public function setValMusFacBuccinadorIzquierda4(?string $val_mus_fac_buccinador_izquierda_4): self
    {
        $this->val_mus_fac_buccinador_izquierda_4 = $val_mus_fac_buccinador_izquierda_4;

        return $this;
    }

    public function getValMusFacBuccinadorIzquierda5(): ?string
    {
        return $this->val_mus_fac_buccinador_izquierda_5;
    }

    public function setValMusFacBuccinadorIzquierda5(?string $val_mus_fac_buccinador_izquierda_5): self
    {
        $this->val_mus_fac_buccinador_izquierda_5 = $val_mus_fac_buccinador_izquierda_5;

        return $this;
    }

    public function getValMusFacBuccinadorIzquierda6(): ?string
    {
        return $this->val_mus_fac_buccinador_izquierda_6;
    }

    public function setValMusFacBuccinadorIzquierda6(?string $val_mus_fac_buccinador_izquierda_6): self
    {
        $this->val_mus_fac_buccinador_izquierda_6 = $val_mus_fac_buccinador_izquierda_6;

        return $this;
    }

    public function getValMusFacBuccinadorIzquierda7(): ?string
    {
        return $this->val_mus_fac_buccinador_izquierda_7;
    }

    public function setValMusFacBuccinadorIzquierda7(?string $val_mus_fac_buccinador_izquierda_7): self
    {
        $this->val_mus_fac_buccinador_izquierda_7 = $val_mus_fac_buccinador_izquierda_7;

        return $this;
    }

    public function getValMusFacBuccinadorIzquierda8(): ?string
    {
        return $this->val_mus_fac_buccinador_izquierda_8;
    }

    public function setValMusFacBuccinadorIzquierda8(?string $val_mus_fac_buccinador_izquierda_8): self
    {
        $this->val_mus_fac_buccinador_izquierda_8 = $val_mus_fac_buccinador_izquierda_8;

        return $this;
    }

    public function getValMusFacBuccinadorIzquierda9(): ?string
    {
        return $this->val_mus_fac_buccinador_izquierda_9;
    }

    public function setValMusFacBuccinadorIzquierda9(?string $val_mus_fac_buccinador_izquierda_9): self
    {
        $this->val_mus_fac_buccinador_izquierda_9 = $val_mus_fac_buccinador_izquierda_9;

        return $this;
    }

    public function getValMusFacBuccinadorIzquierda10(): ?string
    {
        return $this->val_mus_fac_buccinador_izquierda_10;
    }

    public function setValMusFacBuccinadorIzquierda10(?string $val_mus_fac_buccinador_izquierda_10): self
    {
        $this->val_mus_fac_buccinador_izquierda_10 = $val_mus_fac_buccinador_izquierda_10;

        return $this;
    }

    public function getValMusFacBuccinadorIzquierda11(): ?string
    {
        return $this->val_mus_fac_buccinador_izquierda_11;
    }

    public function setValMusFacBuccinadorIzquierda11(?string $val_mus_fac_buccinador_izquierda_11): self
    {
        $this->val_mus_fac_buccinador_izquierda_11 = $val_mus_fac_buccinador_izquierda_11;

        return $this;
    }

    public function getValMusFacBuccinadorIzquierda12(): ?string
    {
        return $this->val_mus_fac_buccinador_izquierda_12;
    }

    public function setValMusFacBuccinadorIzquierda12(?string $val_mus_fac_buccinador_izquierda_12): self
    {
        $this->val_mus_fac_buccinador_izquierda_12 = $val_mus_fac_buccinador_izquierda_12;

        return $this;
    }

    public function getValMusFacCuadroMentonDerecha1(): ?string
    {
        return $this->val_mus_fac_cuadro_menton_derecha_1;
    }

    public function setValMusFacCuadroMentonDerecha1(?string $val_mus_fac_cuadro_menton_derecha_1): self
    {
        $this->val_mus_fac_cuadro_menton_derecha_1 = $val_mus_fac_cuadro_menton_derecha_1;

        return $this;
    }

    public function getValMusFacCuadroMentonDerecha2(): ?string
    {
        return $this->val_mus_fac_cuadro_menton_derecha_2;
    }

    public function setValMusFacCuadroMentonDerecha2(?string $val_mus_fac_cuadro_menton_derecha_2): self
    {
        $this->val_mus_fac_cuadro_menton_derecha_2 = $val_mus_fac_cuadro_menton_derecha_2;

        return $this;
    }

    public function getValMusFacCuadroMentonDerecha3(): ?string
    {
        return $this->val_mus_fac_cuadro_menton_derecha_3;
    }

    public function setValMusFacCuadroMentonDerecha3(?string $val_mus_fac_cuadro_menton_derecha_3): self
    {
        $this->val_mus_fac_cuadro_menton_derecha_3 = $val_mus_fac_cuadro_menton_derecha_3;

        return $this;
    }

    public function getValMusFacCuadroMentonDerecha4(): ?string
    {
        return $this->val_mus_fac_cuadro_menton_derecha_4;
    }

    public function setValMusFacCuadroMentonDerecha4(?string $val_mus_fac_cuadro_menton_derecha_4): self
    {
        $this->val_mus_fac_cuadro_menton_derecha_4 = $val_mus_fac_cuadro_menton_derecha_4;

        return $this;
    }

    public function getValMusFacCuadroMentonDerecha5(): ?string
    {
        return $this->val_mus_fac_cuadro_menton_derecha_5;
    }

    public function setValMusFacCuadroMentonDerecha5(?string $val_mus_fac_cuadro_menton_derecha_5): self
    {
        $this->val_mus_fac_cuadro_menton_derecha_5 = $val_mus_fac_cuadro_menton_derecha_5;

        return $this;
    }

    public function getValMusFacCuadroMentonDerecha6(): ?string
    {
        return $this->val_mus_fac_cuadro_menton_derecha_6;
    }

    public function setValMusFacCuadroMentonDerecha6(?string $val_mus_fac_cuadro_menton_derecha_6): self
    {
        $this->val_mus_fac_cuadro_menton_derecha_6 = $val_mus_fac_cuadro_menton_derecha_6;

        return $this;
    }

    public function getValMusFacCuadroMentonDerecha7(): ?string
    {
        return $this->val_mus_fac_cuadro_menton_derecha_7;
    }

    public function setValMusFacCuadroMentonDerecha7(?string $val_mus_fac_cuadro_menton_derecha_7): self
    {
        $this->val_mus_fac_cuadro_menton_derecha_7 = $val_mus_fac_cuadro_menton_derecha_7;

        return $this;
    }

    public function getValMusFacCuadroMentonDerecha8(): ?string
    {
        return $this->val_mus_fac_cuadro_menton_derecha_8;
    }

    public function setValMusFacCuadroMentonDerecha8(?string $val_mus_fac_cuadro_menton_derecha_8): self
    {
        $this->val_mus_fac_cuadro_menton_derecha_8 = $val_mus_fac_cuadro_menton_derecha_8;

        return $this;
    }

    public function getValMusFacCuadroMentonDerecha9(): ?string
    {
        return $this->val_mus_fac_cuadro_menton_derecha_9;
    }

    public function setValMusFacCuadroMentonDerecha9(?string $val_mus_fac_cuadro_menton_derecha_9): self
    {
        $this->val_mus_fac_cuadro_menton_derecha_9 = $val_mus_fac_cuadro_menton_derecha_9;

        return $this;
    }

    public function getValMusFacCuadroMentonDerecha10(): ?string
    {
        return $this->val_mus_fac_cuadro_menton_derecha_10;
    }

    public function setValMusFacCuadroMentonDerecha10(?string $val_mus_fac_cuadro_menton_derecha_10): self
    {
        $this->val_mus_fac_cuadro_menton_derecha_10 = $val_mus_fac_cuadro_menton_derecha_10;

        return $this;
    }

    public function getValMusFacCuadroMentonDerecha11(): ?string
    {
        return $this->val_mus_fac_cuadro_menton_derecha_11;
    }

    public function setValMusFacCuadroMentonDerecha11(?string $val_mus_fac_cuadro_menton_derecha_11): self
    {
        $this->val_mus_fac_cuadro_menton_derecha_11 = $val_mus_fac_cuadro_menton_derecha_11;

        return $this;
    }

    public function getValMusFacCuadroMentonDerecha12(): ?string
    {
        return $this->val_mus_fac_cuadro_menton_derecha_12;
    }

    public function setValMusFacCuadroMentonDerecha12(?string $val_mus_fac_cuadro_menton_derecha_12): self
    {
        $this->val_mus_fac_cuadro_menton_derecha_12 = $val_mus_fac_cuadro_menton_derecha_12;

        return $this;
    }

    public function getValMusFacCuadroMentonIzquierda1(): ?string
    {
        return $this->val_mus_fac_cuadro_menton_izquierda_1;
    }

    public function setValMusFacCuadroMentonIzquierda1(?string $val_mus_fac_cuadro_menton_izquierda_1): self
    {
        $this->val_mus_fac_cuadro_menton_izquierda_1 = $val_mus_fac_cuadro_menton_izquierda_1;

        return $this;
    }

    public function getValMusFacCuadroMentonIzquierda2(): ?string
    {
        return $this->val_mus_fac_cuadro_menton_izquierda_2;
    }

    public function setValMusFacCuadroMentonIzquierda2(?string $val_mus_fac_cuadro_menton_izquierda_2): self
    {
        $this->val_mus_fac_cuadro_menton_izquierda_2 = $val_mus_fac_cuadro_menton_izquierda_2;

        return $this;
    }

    public function getValMusFacCuadroMentonIzquierda3(): ?string
    {
        return $this->val_mus_fac_cuadro_menton_izquierda_3;
    }

    public function setValMusFacCuadroMentonIzquierda3(?string $val_mus_fac_cuadro_menton_izquierda_3): self
    {
        $this->val_mus_fac_cuadro_menton_izquierda_3 = $val_mus_fac_cuadro_menton_izquierda_3;

        return $this;
    }

    public function getValMusFacCuadroMentonIzquierda4(): ?string
    {
        return $this->val_mus_fac_cuadro_menton_izquierda_4;
    }

    public function setValMusFacCuadroMentonIzquierda4(?string $val_mus_fac_cuadro_menton_izquierda_4): self
    {
        $this->val_mus_fac_cuadro_menton_izquierda_4 = $val_mus_fac_cuadro_menton_izquierda_4;

        return $this;
    }

    public function getValMusFacCuadroMentonIzquierda5(): ?string
    {
        return $this->val_mus_fac_cuadro_menton_izquierda_5;
    }

    public function setValMusFacCuadroMentonIzquierda5(?string $val_mus_fac_cuadro_menton_izquierda_5): self
    {
        $this->val_mus_fac_cuadro_menton_izquierda_5 = $val_mus_fac_cuadro_menton_izquierda_5;

        return $this;
    }

    public function getValMusFacCuadroMentonIzquierda6(): ?string
    {
        return $this->val_mus_fac_cuadro_menton_izquierda_6;
    }

    public function setValMusFacCuadroMentonIzquierda6(?string $val_mus_fac_cuadro_menton_izquierda_6): self
    {
        $this->val_mus_fac_cuadro_menton_izquierda_6 = $val_mus_fac_cuadro_menton_izquierda_6;

        return $this;
    }

    public function getValMusFacCuadroMentonIzquierda7(): ?string
    {
        return $this->val_mus_fac_cuadro_menton_izquierda_7;
    }

    public function setValMusFacCuadroMentonIzquierda7(?string $val_mus_fac_cuadro_menton_izquierda_7): self
    {
        $this->val_mus_fac_cuadro_menton_izquierda_7 = $val_mus_fac_cuadro_menton_izquierda_7;

        return $this;
    }

    public function getValMusFacCuadroMentonIzquierda8(): ?string
    {
        return $this->val_mus_fac_cuadro_menton_izquierda_8;
    }

    public function setValMusFacCuadroMentonIzquierda8(?string $val_mus_fac_cuadro_menton_izquierda_8): self
    {
        $this->val_mus_fac_cuadro_menton_izquierda_8 = $val_mus_fac_cuadro_menton_izquierda_8;

        return $this;
    }

    public function getValMusFacCuadroMentonIzquierda9(): ?string
    {
        return $this->val_mus_fac_cuadro_menton_izquierda_9;
    }

    public function setValMusFacCuadroMentonIzquierda9(?string $val_mus_fac_cuadro_menton_izquierda_9): self
    {
        $this->val_mus_fac_cuadro_menton_izquierda_9 = $val_mus_fac_cuadro_menton_izquierda_9;

        return $this;
    }

    public function getValMusFacCuadroMentonIzquierda10(): ?string
    {
        return $this->val_mus_fac_cuadro_menton_izquierda_10;
    }

    public function setValMusFacCuadroMentonIzquierda10(?string $val_mus_fac_cuadro_menton_izquierda_10): self
    {
        $this->val_mus_fac_cuadro_menton_izquierda_10 = $val_mus_fac_cuadro_menton_izquierda_10;

        return $this;
    }

    public function getValMusFacCuadroMentonIzquierda11(): ?string
    {
        return $this->val_mus_fac_cuadro_menton_izquierda_11;
    }

    public function setValMusFacCuadroMentonIzquierda11(?string $val_mus_fac_cuadro_menton_izquierda_11): self
    {
        $this->val_mus_fac_cuadro_menton_izquierda_11 = $val_mus_fac_cuadro_menton_izquierda_11;

        return $this;
    }

    public function getValMusFacCuadroMentonIzquierda12(): ?string
    {
        return $this->val_mus_fac_cuadro_menton_izquierda_12;
    }

    public function setValMusFacCuadroMentonIzquierda12(?string $val_mus_fac_cuadro_menton_izquierda_12): self
    {
        $this->val_mus_fac_cuadro_menton_izquierda_12 = $val_mus_fac_cuadro_menton_izquierda_12;

        return $this;
    }

    public function getValMusFacCutaneoDerecha1(): ?string
    {
        return $this->val_mus_fac_cutaneo_derecha_1;
    }

    public function setValMusFacCutaneoDerecha1(?string $val_mus_fac_cutaneo_derecha_1): self
    {
        $this->val_mus_fac_cutaneo_derecha_1 = $val_mus_fac_cutaneo_derecha_1;

        return $this;
    }

    public function getValMusFacCutaneoDerecha2(): ?string
    {
        return $this->val_mus_fac_cutaneo_derecha_2;
    }

    public function setValMusFacCutaneoDerecha2(?string $val_mus_fac_cutaneo_derecha_2): self
    {
        $this->val_mus_fac_cutaneo_derecha_2 = $val_mus_fac_cutaneo_derecha_2;

        return $this;
    }

    public function getValMusFacCutaneoDerecha3(): ?string
    {
        return $this->val_mus_fac_cutaneo_derecha_3;
    }

    public function setValMusFacCutaneoDerecha3(?string $val_mus_fac_cutaneo_derecha_3): self
    {
        $this->val_mus_fac_cutaneo_derecha_3 = $val_mus_fac_cutaneo_derecha_3;

        return $this;
    }

    public function getValMusFacCutaneoDerecha4(): ?string
    {
        return $this->val_mus_fac_cutaneo_derecha_4;
    }

    public function setValMusFacCutaneoDerecha4(?string $val_mus_fac_cutaneo_derecha_4): self
    {
        $this->val_mus_fac_cutaneo_derecha_4 = $val_mus_fac_cutaneo_derecha_4;

        return $this;
    }

    public function getValMusFacCutaneoDerecha5(): ?string
    {
        return $this->val_mus_fac_cutaneo_derecha_5;
    }

    public function setValMusFacCutaneoDerecha5(?string $val_mus_fac_cutaneo_derecha_5): self
    {
        $this->val_mus_fac_cutaneo_derecha_5 = $val_mus_fac_cutaneo_derecha_5;

        return $this;
    }

    public function getValMusFacCutaneoDerecha6(): ?string
    {
        return $this->val_mus_fac_cutaneo_derecha_6;
    }

    public function setValMusFacCutaneoDerecha6(?string $val_mus_fac_cutaneo_derecha_6): self
    {
        $this->val_mus_fac_cutaneo_derecha_6 = $val_mus_fac_cutaneo_derecha_6;

        return $this;
    }

    public function getValMusFacCutaneoDerecha7(): ?string
    {
        return $this->val_mus_fac_cutaneo_derecha_7;
    }

    public function setValMusFacCutaneoDerecha7(?string $val_mus_fac_cutaneo_derecha_7): self
    {
        $this->val_mus_fac_cutaneo_derecha_7 = $val_mus_fac_cutaneo_derecha_7;

        return $this;
    }

    public function getValMusFacCutaneoDerecha8(): ?string
    {
        return $this->val_mus_fac_cutaneo_derecha_8;
    }

    public function setValMusFacCutaneoDerecha8(?string $val_mus_fac_cutaneo_derecha_8): self
    {
        $this->val_mus_fac_cutaneo_derecha_8 = $val_mus_fac_cutaneo_derecha_8;

        return $this;
    }

    public function getValMusFacCutaneoDerecha9(): ?string
    {
        return $this->val_mus_fac_cutaneo_derecha_9;
    }

    public function setValMusFacCutaneoDerecha9(?string $val_mus_fac_cutaneo_derecha_9): self
    {
        $this->val_mus_fac_cutaneo_derecha_9 = $val_mus_fac_cutaneo_derecha_9;

        return $this;
    }

    public function getValMusFacCutaneoDerecha10(): ?string
    {
        return $this->val_mus_fac_cutaneo_derecha_10;
    }

    public function setValMusFacCutaneoDerecha10(?string $val_mus_fac_cutaneo_derecha_10): self
    {
        $this->val_mus_fac_cutaneo_derecha_10 = $val_mus_fac_cutaneo_derecha_10;

        return $this;
    }

    public function getValMusFacCutaneoDerecha11(): ?string
    {
        return $this->val_mus_fac_cutaneo_derecha_11;
    }

    public function setValMusFacCutaneoDerecha11(?string $val_mus_fac_cutaneo_derecha_11): self
    {
        $this->val_mus_fac_cutaneo_derecha_11 = $val_mus_fac_cutaneo_derecha_11;

        return $this;
    }

    public function getValMusFacCutaneoDerecha12(): ?string
    {
        return $this->val_mus_fac_cutaneo_derecha_12;
    }

    public function setValMusFacCutaneoDerecha12(?string $val_mus_fac_cutaneo_derecha_12): self
    {
        $this->val_mus_fac_cutaneo_derecha_12 = $val_mus_fac_cutaneo_derecha_12;

        return $this;
    }

    public function getValMusFacCutaneoIzquierda1(): ?string
    {
        return $this->val_mus_fac_cutaneo_izquierda_1;
    }

    public function setValMusFacCutaneoIzquierda1(?string $val_mus_fac_cutaneo_izquierda_1): self
    {
        $this->val_mus_fac_cutaneo_izquierda_1 = $val_mus_fac_cutaneo_izquierda_1;

        return $this;
    }

    public function getValMusFacCutaneoIzquierda2(): ?string
    {
        return $this->val_mus_fac_cutaneo_izquierda_2;
    }

    public function setValMusFacCutaneoIzquierda2(?string $val_mus_fac_cutaneo_izquierda_2): self
    {
        $this->val_mus_fac_cutaneo_izquierda_2 = $val_mus_fac_cutaneo_izquierda_2;

        return $this;
    }

    public function getValMusFacCutaneoIzquierda3(): ?string
    {
        return $this->val_mus_fac_cutaneo_izquierda_3;
    }

    public function setValMusFacCutaneoIzquierda3(?string $val_mus_fac_cutaneo_izquierda_3): self
    {
        $this->val_mus_fac_cutaneo_izquierda_3 = $val_mus_fac_cutaneo_izquierda_3;

        return $this;
    }

    public function getValMusFacCutaneoIzquierda4(): ?string
    {
        return $this->val_mus_fac_cutaneo_izquierda_4;
    }

    public function setValMusFacCutaneoIzquierda4(?string $val_mus_fac_cutaneo_izquierda_4): self
    {
        $this->val_mus_fac_cutaneo_izquierda_4 = $val_mus_fac_cutaneo_izquierda_4;

        return $this;
    }

    public function getValMusFacCutaneoIzquierda5(): ?string
    {
        return $this->val_mus_fac_cutaneo_izquierda_5;
    }

    public function setValMusFacCutaneoIzquierda5(?string $val_mus_fac_cutaneo_izquierda_5): self
    {
        $this->val_mus_fac_cutaneo_izquierda_5 = $val_mus_fac_cutaneo_izquierda_5;

        return $this;
    }

    public function getValMusFacCutaneoIzquierda6(): ?string
    {
        return $this->val_mus_fac_cutaneo_izquierda_6;
    }

    public function setValMusFacCutaneoIzquierda6(?string $val_mus_fac_cutaneo_izquierda_6): self
    {
        $this->val_mus_fac_cutaneo_izquierda_6 = $val_mus_fac_cutaneo_izquierda_6;

        return $this;
    }

    public function getValMusFacCutaneoIzquierda7(): ?string
    {
        return $this->val_mus_fac_cutaneo_izquierda_7;
    }

    public function setValMusFacCutaneoIzquierda7(?string $val_mus_fac_cutaneo_izquierda_7): self
    {
        $this->val_mus_fac_cutaneo_izquierda_7 = $val_mus_fac_cutaneo_izquierda_7;

        return $this;
    }

    public function getValMusFacCutaneoIzquierda8(): ?string
    {
        return $this->val_mus_fac_cutaneo_izquierda_8;
    }

    public function setValMusFacCutaneoIzquierda8(?string $val_mus_fac_cutaneo_izquierda_8): self
    {
        $this->val_mus_fac_cutaneo_izquierda_8 = $val_mus_fac_cutaneo_izquierda_8;

        return $this;
    }

    public function getValMusFacCutaneoIzquierda9(): ?string
    {
        return $this->val_mus_fac_cutaneo_izquierda_9;
    }

    public function setValMusFacCutaneoIzquierda9(?string $val_mus_fac_cutaneo_izquierda_9): self
    {
        $this->val_mus_fac_cutaneo_izquierda_9 = $val_mus_fac_cutaneo_izquierda_9;

        return $this;
    }

    public function getValMusFacCutaneoIzquierda10(): ?string
    {
        return $this->val_mus_fac_cutaneo_izquierda_10;
    }

    public function setValMusFacCutaneoIzquierda10(?string $val_mus_fac_cutaneo_izquierda_10): self
    {
        $this->val_mus_fac_cutaneo_izquierda_10 = $val_mus_fac_cutaneo_izquierda_10;

        return $this;
    }

    public function getValMusFacCutaneoIzquierda11(): ?string
    {
        return $this->val_mus_fac_cutaneo_izquierda_11;
    }

    public function setValMusFacCutaneoIzquierda11(?string $val_mus_fac_cutaneo_izquierda_11): self
    {
        $this->val_mus_fac_cutaneo_izquierda_11 = $val_mus_fac_cutaneo_izquierda_11;

        return $this;
    }

    public function getValMusFacCutaneoIzquierda12(): ?string
    {
        return $this->val_mus_fac_cutaneo_izquierda_12;
    }

    public function setValMusFacCutaneoIzquierda12(?string $val_mus_fac_cutaneo_izquierda_12): self
    {
        $this->val_mus_fac_cutaneo_izquierda_12 = $val_mus_fac_cutaneo_izquierda_12;

        return $this;
    }

    public function getTratamientoFrio(): ?string
    {
        return $this->tratamiento_frio;
    }

    public function setTratamientoFrio(?string $tratamiento_frio): self
    {
        $this->tratamiento_frio = $tratamiento_frio;

        return $this;
    }

    public function getTratamientoCalor(): ?string
    {
        return $this->tratamiento_calor;
    }

    public function setTratamientoCalor(?string $tratamiento_calor): self
    {
        $this->tratamiento_calor = $tratamiento_calor;

        return $this;
    }

    public function getTratamientoUltrasonido(): ?string
    {
        return $this->tratamiento_ultrasonido;
    }

    public function setTratamientoUltrasonido(?string $tratamiento_ultrasonido): self
    {
        $this->tratamiento_ultrasonido = $tratamiento_ultrasonido;

        return $this;
    }

    public function getTratamientoTens(): ?string
    {
        return $this->tratamiento_tens;
    }

    public function setTratamientoTens(?string $tratamiento_tens): self
    {
        $this->tratamiento_tens = $tratamiento_tens;

        return $this;
    }

    public function getTratamientoToquesHielo(): ?string
    {
        return $this->tratamiento_toques_hielo;
    }

    public function setTratamientoToquesHielo(?string $tratamiento_toques_hielo): self
    {
        $this->tratamiento_toques_hielo = $tratamiento_toques_hielo;

        return $this;
    }

    public function getTratamientoEstimulacion(): ?string
    {
        return $this->tratamiento_estimulacion;
    }

    public function setTratamientoEstimulacion(?string $tratamiento_estimulacion): self
    {
        $this->tratamiento_estimulacion = $tratamiento_estimulacion;

        return $this;
    }

    public function getMasajesSedativo(): ?string
    {
        return $this->masajes_sedativo;
    }

    public function setMasajesSedativo(?string $masajes_sedativo): self
    {
        $this->masajes_sedativo = $masajes_sedativo;

        return $this;
    }

    public function getMasajesHielo(): ?string
    {
        return $this->masajes_hielo;
    }

    public function setMasajesHielo(?string $masajes_hielo): self
    {
        $this->masajes_hielo = $masajes_hielo;

        return $this;
    }

    public function getTecnFacilKabbat(): ?string
    {
        return $this->tecn_facil_kabbat;
    }

    public function setTecnFacilKabbat(?string $tecn_facil_kabbat): self
    {
        $this->tecn_facil_kabbat = $tecn_facil_kabbat;

        return $this;
    }

    public function getTecnFacilBobath(): ?string
    {
        return $this->tecn_facil_bobath;
    }

    public function setTecnFacilBobath(?string $tecn_facil_bobath): self
    {
        $this->tecn_facil_bobath = $tecn_facil_bobath;

        return $this;
    }

    public function getEjerciciosPasivos(): ?bool
    {
        return $this->ejercicios_pasivos;
    }

    public function setEjerciciosPasivos(?bool $ejercicios_pasivos): self
    {
        $this->ejercicios_pasivos = $ejercicios_pasivos;

        return $this;
    }

    public function getEjerciciosActivos(): ?bool
    {
        return $this->ejercicios_activos;
    }

    public function setEjerciciosActivos(?bool $ejercicios_activos): self
    {
        $this->ejercicios_activos = $ejercicios_activos;

        return $this;
    }

    public function getEjerciciosActivosAsistidos(): ?bool
    {
        return $this->ejercicios_activos_asistidos;
    }

    public function setEjerciciosActivosAsistidos(?bool $ejercicios_activos_asistidos): self
    {
        $this->ejercicios_activos_asistidos = $ejercicios_activos_asistidos;

        return $this;
    }

    public function getEjerciciosActivosResistidos(): ?bool
    {
        return $this->ejercicios_activos_resistidos;
    }

    public function setEjerciciosActivosResistidos(?bool $ejercicios_activos_resistidos): self
    {
        $this->ejercicios_activos_resistidos = $ejercicios_activos_resistidos;

        return $this;
    }

    public function getEjerciciosIsometricos(): ?bool
    {
        return $this->ejercicios_isometricos;
    }

    public function setEjerciciosIsometricos(?bool $ejercicios_isometricos): self
    {
        $this->ejercicios_isometricos = $ejercicios_isometricos;

        return $this;
    }

    public function getObjetivosTratamiento(): ?string
    {
        return $this->objetivos_tratamiento;
    }

    public function setObjetivosTratamiento(?string $objetivos_tratamiento): self
    {
        $this->objetivos_tratamiento = $objetivos_tratamiento;

        return $this;
    }

    public function getResumenFinalTratamiento(): ?string
    {
        return $this->resumen_final_tratamiento;
    }

    public function setResumenFinalTratamiento(?string $resumen_final_tratamiento): self
    {
        $this->resumen_final_tratamiento = $resumen_final_tratamiento;

        return $this;
    }
}
