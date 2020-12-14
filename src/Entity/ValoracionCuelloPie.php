<?php

namespace App\Entity;

use App\Repository\ValoracionCuelloPieRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ValoracionCuelloPieRepository::class)
 */
class ValoracionCuelloPie
{
    /**
     * @ORM\Id()
     * @ORM\OneToOne(targetEntity=ValoracionGeneral::class, cascade={"persist", "remove"})
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
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $dolor_inicial_localizacion_cicatriz;

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
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $dolor_final_longitud;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $edema_tobillo_inicial_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $edema_tobillo_final_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $edema_tobillo_inicial_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $edema_tobillo_final_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $edema_medio_pie_inicial_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $edema_medio_pie_final_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $edema_medio_pie_inicial_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $edema_medio_pie_final_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $edema_cruzado_inicial_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $edema_cruzado_final_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $edema_cruzado_inicial_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $edema_cruzado_final_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $edema_antepie_inicial_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $edema_antepie_final_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $edema_antepie_inicial_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $edema_antepie_final_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $mov_arti_dorsiflexion_inicial_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $mov_arti_dorsiflexion_final_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $mov_arti_dorsiflexion_inicial_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $mov_arti_dorsiflexion_final_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $mov_arti_plantiflexion_inicial_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $mov_arti_plantiflexion_final_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $mov_arti_plantiflexion_inicial_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $mov_arti_plantiflexion_final_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $mov_arti_inversiones_inicial_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $mov_arti_inversiones_final_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $mov_arti_inversiones_inicial_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $mov_arti_inversiones_final_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $mov_arti_eversion_inicial_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $mov_arti_eversion_final_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $mov_arti_eversion_inicial_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $mov_arti_eversion_final_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $fuer_musc_tibial_anterior_inicial_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $fuer_musc_tibial_anterior_final_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $fuer_musc_tibial_anterior_inicial_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $fuer_musc_tibial_anterior_final_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $fuer_musc_tibial_posterior_inicial_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $fuer_musc_tibial_posterior_final_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $fuer_musc_tibial_posterior_inicial_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $fuer_musc_tibial_posterior_final_izquierda;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $fuer_musc_peroneo_largo_inicial_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $fuer_musc_peroneo_largo_final_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $fuer_musc_peroneo_largo_inicial_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $fuer_musc_peroneo_largo_final_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $fuer_musc_peroneo_corto_inicial_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $fuer_musc_peroneo_corto_final_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $fuer_musc_peroneo_corto_inicial_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $fuer_musc_peroneo_corto_final_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $fuer_musc_gemelo_soleo_inicial_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $fuer_musc_gemelo_soleo_final_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $fuer_musc_gemelo_soleo_inicial_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $fuer_musc_gemelo_soleo_final_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $fuer_musc_ext_com_dedos_inicial_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $fuer_musc_ext_com_dedos_final_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $fuer_musc_ext_com_dedos_inicial_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $fuer_musc_ext_com_dedos_final_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $flexibilidad_isquiotibiales_inicial_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $flexibilidad_isquiotibiales_final_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $flexibilidad_isquiotibiales_inicial_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $flexibilidad_isquiotibiales_final_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $flexibilidad_gemelo_soleo_inicial_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $flexibilidad_gemelo_soleo_final_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $flexibilidad_gemelo_soleo_inicial_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $flexibilidad_gemelo_soleo_final_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $flexibilidad_fascia_plantar_inicial_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $flexibilidad_fascia_plantar_final_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $flexibilidad_fascia_plantar_inicial_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $flexibilidad_fascia_plantar_final_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $marcha_fase_apoyo_inicial_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $marcha_fase_apoyo_final_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $marcha_fase_apoyo_inicial_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $marcha_fase_apoyo_final_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $marcha_fase_balanceo_inicial_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $marcha_fase_balanceo_final_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $marcha_fase_balanceo_inicial_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $marcha_fase_balanceo_final_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $marcha_longitud_cadencia_inicial_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $marcha_longitud_cadencia_final_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $marcha_longitud_cadencia_inicial_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $marcha_longitud_cadencia_final_izquierda;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $ubicacion_espacio_simetrico;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $ubicacion_espacio_asimetrico;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $dinamica_lateral;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $un_pie_derecho;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $un_pie_izquierdo;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $tratamiento_frio;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $tratamiento_calor;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $tratamiento_masaje;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $tratamiento_ultrasonido;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $tratamiento_tens;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $tratamiento_hidroterapia;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $tratamiento_parafina;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $tratamiento_hielo;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $masajes_sedativo;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $masajes_tejido;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $masajes_hielo;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $tecn_faci_kabbat;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $tecn_faci_bobath;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $reha_prop_puntas;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $reha_prop_talones;

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
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $ejercicios_estiramientos;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $aparatos_bicicleta;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $aparatos_balancin;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $aparatos_bandas;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $aparatos_body_line;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $aparatos_tubing;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $aparatos_multifuerza;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $aparatos_stepper;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $otras_kester;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $otras_odonohieu;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $otras_cadena_cinetica;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $entrenamiento_marcha_barras;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $saltos_frente;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $saltos_lateral;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $saltos_1_pie;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $saltos_2_pies;

    /**
     * @ORM\Column(type="text")
     */
    private $objetivos_tratamiento;

    /**
     * @ORM\Column(type="text")
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

    public function getDolorInicialLocalizacionCicatriz(): ?string
    {
        return $this->dolor_inicial_localizacion_cicatriz;
    }

    public function setDolorInicialLocalizacionCicatriz(?string $dolor_inicial_localizacion_cicatriz): self
    {
        $this->dolor_inicial_localizacion_cicatriz = $dolor_inicial_localizacion_cicatriz;

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

    public function getDolorFinalLongitud(): ?string
    {
        return $this->dolor_final_longitud;
    }

    public function setDolorFinalLongitud(?string $dolor_final_longitud): self
    {
        $this->dolor_final_longitud = $dolor_final_longitud;

        return $this;
    }

    public function getEdemaTobilloInicialDerecha(): ?string
    {
        return $this->edema_tobillo_inicial_derecha;
    }

    public function setEdemaTobilloInicialDerecha(?string $edema_tobillo_inicial_derecha): self
    {
        $this->edema_tobillo_inicial_derecha = $edema_tobillo_inicial_derecha;

        return $this;
    }

    public function getEdemaTobilloFinalDerecha(): ?string
    {
        return $this->edema_tobillo_final_derecha;
    }

    public function setEdemaTobilloFinalDerecha(?string $edema_tobillo_final_derecha): self
    {
        $this->edema_tobillo_final_derecha = $edema_tobillo_final_derecha;

        return $this;
    }

    public function getEdemaTobilloInicialIzquierda(): ?string
    {
        return $this->edema_tobillo_inicial_izquierda;
    }

    public function setEdemaTobilloInicialIzquierda(?string $edema_tobillo_inicial_izquierda): self
    {
        $this->edema_tobillo_inicial_izquierda = $edema_tobillo_inicial_izquierda;

        return $this;
    }

    public function getEdemaTobilloFinalIzquierda(): ?string
    {
        return $this->edema_tobillo_final_izquierda;
    }

    public function setEdemaTobilloFinalIzquierda(?string $edema_tobillo_final_izquierda): self
    {
        $this->edema_tobillo_final_izquierda = $edema_tobillo_final_izquierda;

        return $this;
    }

    public function getEdemaMedioPieInicialDerecha(): ?string
    {
        return $this->edema_medio_pie_inicial_derecha;
    }

    public function setEdemaMedioPieInicialDerecha(?string $edema_medio_pie_inicial_derecha): self
    {
        $this->edema_medio_pie_inicial_derecha = $edema_medio_pie_inicial_derecha;

        return $this;
    }

    public function getEdemaMedioPieFinalDerecha(): ?string
    {
        return $this->edema_medio_pie_final_derecha;
    }

    public function setEdemaMedioPieFinalDerecha(?string $edema_medio_pie_final_derecha): self
    {
        $this->edema_medio_pie_final_derecha = $edema_medio_pie_final_derecha;

        return $this;
    }

    public function getEdemaMedioPieInicialIzquierda(): ?string
    {
        return $this->edema_medio_pie_inicial_izquierda;
    }

    public function setEdemaMedioPieInicialIzquierda(?string $edema_medio_pie_inicial_izquierda): self
    {
        $this->edema_medio_pie_inicial_izquierda = $edema_medio_pie_inicial_izquierda;

        return $this;
    }

    public function getEdemaMedioPieFinalIzquierda(): ?string
    {
        return $this->edema_medio_pie_final_izquierda;
    }

    public function setEdemaMedioPieFinalIzquierda(?string $edema_medio_pie_final_izquierda): self
    {
        $this->edema_medio_pie_final_izquierda = $edema_medio_pie_final_izquierda;

        return $this;
    }

    public function getEdemaCruzadoInicialDerecha(): ?string
    {
        return $this->edema_cruzado_inicial_derecha;
    }

    public function setEdemaCruzadoInicialDerecha(?string $edema_cruzado_inicial_derecha): self
    {
        $this->edema_cruzado_inicial_derecha = $edema_cruzado_inicial_derecha;

        return $this;
    }

    public function getEdemaCruzadoFinalDerecha(): ?string
    {
        return $this->edema_cruzado_final_derecha;
    }

    public function setEdemaCruzadoFinalDerecha(?string $edema_cruzado_final_derecha): self
    {
        $this->edema_cruzado_final_derecha = $edema_cruzado_final_derecha;

        return $this;
    }

    public function getEdemaCruzadoInicialIzquierda(): ?string
    {
        return $this->edema_cruzado_inicial_izquierda;
    }

    public function setEdemaCruzadoInicialIzquierda(?string $edema_cruzado_inicial_izquierda): self
    {
        $this->edema_cruzado_inicial_izquierda = $edema_cruzado_inicial_izquierda;

        return $this;
    }

    public function getEdemaCruzadoFinalIzquierda(): ?string
    {
        return $this->edema_cruzado_final_izquierda;
    }

    public function setEdemaCruzadoFinalIzquierda(?string $edema_cruzado_final_izquierda): self
    {
        $this->edema_cruzado_final_izquierda = $edema_cruzado_final_izquierda;

        return $this;
    }

    public function getEdemaAntepieInicialDerecha(): ?string
    {
        return $this->edema_antepie_inicial_derecha;
    }

    public function setEdemaAntepieInicialDerecha(?string $edema_antepie_inicial_derecha): self
    {
        $this->edema_antepie_inicial_derecha = $edema_antepie_inicial_derecha;

        return $this;
    }

    public function getEdemaAntepieFinalDerecha(): ?string
    {
        return $this->edema_antepie_final_derecha;
    }

    public function setEdemaAntepieFinalDerecha(?string $edema_antepie_final_derecha): self
    {
        $this->edema_antepie_final_derecha = $edema_antepie_final_derecha;

        return $this;
    }

    public function getEdemaAntepieInicialIzquierda(): ?string
    {
        return $this->edema_antepie_inicial_izquierda;
    }

    public function setEdemaAntepieInicialIzquierda(?string $edema_antepie_inicial_izquierda): self
    {
        $this->edema_antepie_inicial_izquierda = $edema_antepie_inicial_izquierda;

        return $this;
    }

    public function getEdemaAntepieFinalIzquierda(): ?string
    {
        return $this->edema_antepie_final_izquierda;
    }

    public function setEdemaAntepieFinalIzquierda(?string $edema_antepie_final_izquierda): self
    {
        $this->edema_antepie_final_izquierda = $edema_antepie_final_izquierda;

        return $this;
    }

    public function getMovArtiDorsiflexionInicialDerecha(): ?string
    {
        return $this->mov_arti_dorsiflexion_inicial_derecha;
    }

    public function setMovArtiDorsiflexionInicialDerecha(?string $mov_arti_dorsiflexion_inicial_derecha): self
    {
        $this->mov_arti_dorsiflexion_inicial_derecha = $mov_arti_dorsiflexion_inicial_derecha;

        return $this;
    }

    public function getMovArtiDorsiflexionFinalDerecha(): ?string
    {
        return $this->mov_arti_dorsiflexion_final_derecha;
    }

    public function setMovArtiDorsiflexionFinalDerecha(?string $mov_arti_dorsiflexion_final_derecha): self
    {
        $this->mov_arti_dorsiflexion_final_derecha = $mov_arti_dorsiflexion_final_derecha;

        return $this;
    }

    public function getMovArtiDorsiflexionInicialIzquierda(): ?string
    {
        return $this->mov_arti_dorsiflexion_inicial_izquierda;
    }

    public function setMovArtiDorsiflexionInicialIzquierda(?string $mov_arti_dorsiflexion_inicial_izquierda): self
    {
        $this->mov_arti_dorsiflexion_inicial_izquierda = $mov_arti_dorsiflexion_inicial_izquierda;

        return $this;
    }

    public function getMovArtiDorsiflexionFinalIzquierda(): ?string
    {
        return $this->mov_arti_dorsiflexion_final_izquierda;
    }

    public function setMovArtiDorsiflexionFinalIzquierda(?string $mov_arti_dorsiflexion_final_izquierda): self
    {
        $this->mov_arti_dorsiflexion_final_izquierda = $mov_arti_dorsiflexion_final_izquierda;

        return $this;
    }

    public function getMovArtiPlantiflexionInicialDerecha(): ?string
    {
        return $this->mov_arti_plantiflexion_inicial_derecha;
    }

    public function setMovArtiPlantiflexionInicialDerecha(?string $mov_arti_plantiflexion_inicial_derecha): self
    {
        $this->mov_arti_plantiflexion_inicial_derecha = $mov_arti_plantiflexion_inicial_derecha;

        return $this;
    }

    public function getMovArtiPlantiflexionFinalDerecha(): ?string
    {
        return $this->mov_arti_plantiflexion_final_derecha;
    }

    public function setMovArtiPlantiflexionFinalDerecha(?string $mov_arti_plantiflexion_final_derecha): self
    {
        $this->mov_arti_plantiflexion_final_derecha = $mov_arti_plantiflexion_final_derecha;

        return $this;
    }

    public function getMovArtiPlantiflexionInicialIzquierda(): ?string
    {
        return $this->mov_arti_plantiflexion_inicial_izquierda;
    }

    public function setMovArtiPlantiflexionInicialIzquierda(?string $mov_arti_plantiflexion_inicial_izquierda): self
    {
        $this->mov_arti_plantiflexion_inicial_izquierda = $mov_arti_plantiflexion_inicial_izquierda;

        return $this;
    }

    public function getMovArtiPlantiflexionFinalIzquierda(): ?string
    {
        return $this->mov_arti_plantiflexion_final_izquierda;
    }

    public function setMovArtiPlantiflexionFinalIzquierda(?string $mov_arti_plantiflexion_final_izquierda): self
    {
        $this->mov_arti_plantiflexion_final_izquierda = $mov_arti_plantiflexion_final_izquierda;

        return $this;
    }

    public function getMovArtiInversionesInicialDerecha(): ?string
    {
        return $this->mov_arti_inversiones_inicial_derecha;
    }

    public function setMovArtiInversionesInicialDerecha(?string $mov_arti_inversiones_inicial_derecha): self
    {
        $this->mov_arti_inversiones_inicial_derecha = $mov_arti_inversiones_inicial_derecha;

        return $this;
    }

    public function getMovArtiInversionesFinalDerecha(): ?string
    {
        return $this->mov_arti_inversiones_final_derecha;
    }

    public function setMovArtiInversionesFinalDerecha(?string $mov_arti_inversiones_final_derecha): self
    {
        $this->mov_arti_inversiones_final_derecha = $mov_arti_inversiones_final_derecha;

        return $this;
    }

    public function getMovArtiInversionesInicialIzquierda(): ?string
    {
        return $this->mov_arti_inversiones_inicial_izquierda;
    }

    public function setMovArtiInversionesInicialIzquierda(?string $mov_arti_inversiones_inicial_izquierda): self
    {
        $this->mov_arti_inversiones_inicial_izquierda = $mov_arti_inversiones_inicial_izquierda;

        return $this;
    }

    public function getMovArtiInversionesFinalIzquierda(): ?string
    {
        return $this->mov_arti_inversiones_final_izquierda;
    }

    public function setMovArtiInversionesFinalIzquierda(?string $mov_arti_inversiones_final_izquierda): self
    {
        $this->mov_arti_inversiones_final_izquierda = $mov_arti_inversiones_final_izquierda;

        return $this;
    }

    public function getMovArtiEversionInicialDerecha(): ?string
    {
        return $this->mov_arti_eversion_inicial_derecha;
    }

    public function setMovArtiEversionInicialDerecha(?string $mov_arti_eversion_inicial_derecha): self
    {
        $this->mov_arti_eversion_inicial_derecha = $mov_arti_eversion_inicial_derecha;

        return $this;
    }

    public function getMovArtiEversionFinalDerecha(): ?string
    {
        return $this->mov_arti_eversion_final_derecha;
    }

    public function setMovArtiEversionFinalDerecha(?string $mov_arti_eversion_final_derecha): self
    {
        $this->mov_arti_eversion_final_derecha = $mov_arti_eversion_final_derecha;

        return $this;
    }

    public function getMovArtiEversionInicialIzquierda(): ?string
    {
        return $this->mov_arti_eversion_inicial_izquierda;
    }

    public function setMovArtiEversionInicialIzquierda(?string $mov_arti_eversion_inicial_izquierda): self
    {
        $this->mov_arti_eversion_inicial_izquierda = $mov_arti_eversion_inicial_izquierda;

        return $this;
    }

    public function getMovArtiEversionFinalIzquierda(): ?string
    {
        return $this->mov_arti_eversion_final_izquierda;
    }

    public function setMovArtiEversionFinalIzquierda(?string $mov_arti_eversion_final_izquierda): self
    {
        $this->mov_arti_eversion_final_izquierda = $mov_arti_eversion_final_izquierda;

        return $this;
    }

    public function getFuerMuscTibialAnteriorInicialDerecha(): ?string
    {
        return $this->fuer_musc_tibial_anterior_inicial_derecha;
    }

    public function setFuerMuscTibialAnteriorInicialDerecha(?string $fuer_musc_tibial_anterior_inicial_derecha): self
    {
        $this->fuer_musc_tibial_anterior_inicial_derecha = $fuer_musc_tibial_anterior_inicial_derecha;

        return $this;
    }

    public function getFuerMuscTibialAnteriorFinalDerecha(): ?string
    {
        return $this->fuer_musc_tibial_anterior_final_derecha;
    }

    public function setFuerMuscTibialAnteriorFinalDerecha(?string $fuer_musc_tibial_anterior_final_derecha): self
    {
        $this->fuer_musc_tibial_anterior_final_derecha = $fuer_musc_tibial_anterior_final_derecha;

        return $this;
    }

    public function getFuerMuscTibialAnteriorInicialIzquierda(): ?string
    {
        return $this->fuer_musc_tibial_anterior_inicial_izquierda;
    }

    public function setFuerMuscTibialAnteriorInicialIzquierda(?string $fuer_musc_tibial_anterior_inicial_izquierda): self
    {
        $this->fuer_musc_tibial_anterior_inicial_izquierda = $fuer_musc_tibial_anterior_inicial_izquierda;

        return $this;
    }

    public function getFuerMuscTibialAnteriorFinalIzquierda(): ?string
    {
        return $this->fuer_musc_tibial_anterior_final_izquierda;
    }

    public function setFuerMuscTibialAnteriorFinalIzquierda(?string $fuer_musc_tibial_anterior_final_izquierda): self
    {
        $this->fuer_musc_tibial_anterior_final_izquierda = $fuer_musc_tibial_anterior_final_izquierda;

        return $this;
    }

    public function getFuerMuscTibialPosteriorInicialDerecha(): ?string
    {
        return $this->fuer_musc_tibial_posterior_inicial_derecha;
    }

    public function setFuerMuscTibialPosteriorInicialDerecha(?string $fuer_musc_tibial_posterior_inicial_derecha): self
    {
        $this->fuer_musc_tibial_posterior_inicial_derecha = $fuer_musc_tibial_posterior_inicial_derecha;

        return $this;
    }

    public function getFuerMuscTibialPosteriorFinalDerecha(): ?string
    {
        return $this->fuer_musc_tibial_posterior_final_derecha;
    }

    public function setFuerMuscTibialPosteriorFinalDerecha(?string $fuer_musc_tibial_posterior_final_derecha): self
    {
        $this->fuer_musc_tibial_posterior_final_derecha = $fuer_musc_tibial_posterior_final_derecha;

        return $this;
    }

    public function getFuerMuscTibialPosteriorInicialIzquierda(): ?string
    {
        return $this->fuer_musc_tibial_posterior_inicial_izquierda;
    }

    public function setFuerMuscTibialPosteriorInicialIzquierda(?string $fuer_musc_tibial_posterior_inicial_izquierda): self
    {
        $this->fuer_musc_tibial_posterior_inicial_izquierda = $fuer_musc_tibial_posterior_inicial_izquierda;

        return $this;
    }

    public function getFuerMuscTibialPosteriorFinalIzquierda(): ?string
    {
        return $this->fuer_musc_tibial_posterior_final_izquierda;
    }

    public function setFuerMuscTibialPosteriorFinalIzquierda(?string $fuer_musc_tibial_posterior_final_izquierda): self
    {
        $this->fuer_musc_tibial_posterior_final_izquierda = $fuer_musc_tibial_posterior_final_izquierda;

        return $this;
    }

    public function getFuerMuscPeroneoLargoInicialDerecha(): ?string
    {
        return $this->fuer_musc_peroneo_largo_inicial_derecha;
    }

    public function setFuerMuscPeroneoLargoInicialDerecha(string $fuer_musc_peroneo_largo_inicial_derecha): self
    {
        $this->fuer_musc_peroneo_largo_inicial_derecha = $fuer_musc_peroneo_largo_inicial_derecha;

        return $this;
    }

    public function getFuerMuscPeroneoLargoFinalDerecha(): ?string
    {
        return $this->fuer_musc_peroneo_largo_final_derecha;
    }

    public function setFuerMuscPeroneoLargoFinalDerecha(?string $fuer_musc_peroneo_largo_final_derecha): self
    {
        $this->fuer_musc_peroneo_largo_final_derecha = $fuer_musc_peroneo_largo_final_derecha;

        return $this;
    }

    public function getFuerMuscPeroneoLargoInicialIzquierda(): ?string
    {
        return $this->fuer_musc_peroneo_largo_inicial_izquierda;
    }

    public function setFuerMuscPeroneoLargoInicialIzquierda(?string $fuer_musc_peroneo_largo_inicial_izquierda): self
    {
        $this->fuer_musc_peroneo_largo_inicial_izquierda = $fuer_musc_peroneo_largo_inicial_izquierda;

        return $this;
    }

    public function getFuerMuscPeroneoLargoFinalIzquierda(): ?string
    {
        return $this->fuer_musc_peroneo_largo_final_izquierda;
    }

    public function setFuerMuscPeroneoLargoFinalIzquierda(?string $fuer_musc_peroneo_largo_final_izquierda): self
    {
        $this->fuer_musc_peroneo_largo_final_izquierda = $fuer_musc_peroneo_largo_final_izquierda;

        return $this;
    }

    public function getFuerMuscPeroneoCortoInicialDerecha(): ?string
    {
        return $this->fuer_musc_peroneo_corto_inicial_derecha;
    }

    public function setFuerMuscPeroneoCortoInicialDerecha(?string $fuer_musc_peroneo_corto_inicial_derecha): self
    {
        $this->fuer_musc_peroneo_corto_inicial_derecha = $fuer_musc_peroneo_corto_inicial_derecha;

        return $this;
    }

    public function getFuerMuscPeroneoCortoFinalDerecha(): ?string
    {
        return $this->fuer_musc_peroneo_corto_final_derecha;
    }

    public function setFuerMuscPeroneoCortoFinalDerecha(?string $fuer_musc_peroneo_corto_final_derecha): self
    {
        $this->fuer_musc_peroneo_corto_final_derecha = $fuer_musc_peroneo_corto_final_derecha;

        return $this;
    }

    public function getFuerMuscPeroneoCortoInicialIzquierda(): ?string
    {
        return $this->fuer_musc_peroneo_corto_inicial_izquierda;
    }

    public function setFuerMuscPeroneoCortoInicialIzquierda(?string $fuer_musc_peroneo_corto_inicial_izquierda): self
    {
        $this->fuer_musc_peroneo_corto_inicial_izquierda = $fuer_musc_peroneo_corto_inicial_izquierda;

        return $this;
    }

    public function getFuerMuscPeroneoCortoFinalIzquierda(): ?string
    {
        return $this->fuer_musc_peroneo_corto_final_izquierda;
    }

    public function setFuerMuscPeroneoCortoFinalIzquierda(?string $fuer_musc_peroneo_corto_final_izquierda): self
    {
        $this->fuer_musc_peroneo_corto_final_izquierda = $fuer_musc_peroneo_corto_final_izquierda;

        return $this;
    }

    public function getFuerMuscGemeloSoleoInicialDerecha(): ?string
    {
        return $this->fuer_musc_gemelo_soleo_inicial_derecha;
    }

    public function setFuerMuscGemeloSoleoInicialDerecha(?string $fuer_musc_gemelo_soleo_inicial_derecha): self
    {
        $this->fuer_musc_gemelo_soleo_inicial_derecha = $fuer_musc_gemelo_soleo_inicial_derecha;

        return $this;
    }

    public function getFuerMuscGemeloSoleoFinalDerecha(): ?string
    {
        return $this->fuer_musc_gemelo_soleo_final_derecha;
    }

    public function setFuerMuscGemeloSoleoFinalDerecha(?string $fuer_musc_gemelo_soleo_final_derecha): self
    {
        $this->fuer_musc_gemelo_soleo_final_derecha = $fuer_musc_gemelo_soleo_final_derecha;

        return $this;
    }

    public function getFuerMuscGemeloSoleoInicialIzquierda(): ?string
    {
        return $this->fuer_musc_gemelo_soleo_inicial_izquierda;
    }

    public function setFuerMuscGemeloSoleoInicialIzquierda(?string $fuer_musc_gemelo_soleo_inicial_izquierda): self
    {
        $this->fuer_musc_gemelo_soleo_inicial_izquierda = $fuer_musc_gemelo_soleo_inicial_izquierda;

        return $this;
    }

    public function getFuerMuscGemeloSoleoFinalIzquierda(): ?string
    {
        return $this->fuer_musc_gemelo_soleo_final_izquierda;
    }

    public function setFuerMuscGemeloSoleoFinalIzquierda(?string $fuer_musc_gemelo_soleo_final_izquierda): self
    {
        $this->fuer_musc_gemelo_soleo_final_izquierda = $fuer_musc_gemelo_soleo_final_izquierda;

        return $this;
    }

    public function getFuerMuscExtComDedosInicialDerecha(): ?string
    {
        return $this->fuer_musc_ext_com_dedos_inicial_derecha;
    }

    public function setFuerMuscExtComDedosInicialDerecha(?string $fuer_musc_ext_com_dedos_inicial_derecha): self
    {
        $this->fuer_musc_ext_com_dedos_inicial_derecha = $fuer_musc_ext_com_dedos_inicial_derecha;

        return $this;
    }

    public function getFuerMuscExtComDedosFinalDerecha(): ?string
    {
        return $this->fuer_musc_ext_com_dedos_final_derecha;
    }

    public function setFuerMuscExtComDedosFinalDerecha(?string $fuer_musc_ext_com_dedos_final_derecha): self
    {
        $this->fuer_musc_ext_com_dedos_final_derecha = $fuer_musc_ext_com_dedos_final_derecha;

        return $this;
    }

    public function getFuerMuscExtComDedosInicialIzquierda(): ?string
    {
        return $this->fuer_musc_ext_com_dedos_inicial_izquierda;
    }

    public function setFuerMuscExtComDedosInicialIzquierda(?string $fuer_musc_ext_com_dedos_inicial_izquierda): self
    {
        $this->fuer_musc_ext_com_dedos_inicial_izquierda = $fuer_musc_ext_com_dedos_inicial_izquierda;

        return $this;
    }

    public function getFuerMuscExtComDedosFinalIzquierda(): ?string
    {
        return $this->fuer_musc_ext_com_dedos_final_izquierda;
    }

    public function setFuerMuscExtComDedosFinalIzquierda(?string $fuer_musc_ext_com_dedos_final_izquierda): self
    {
        $this->fuer_musc_ext_com_dedos_final_izquierda = $fuer_musc_ext_com_dedos_final_izquierda;

        return $this;
    }

    public function getFlexibilidadIsquiotibialesInicialDerecha(): ?string
    {
        return $this->flexibilidad_isquiotibiales_inicial_derecha;
    }

    public function setFlexibilidadIsquiotibialesInicialDerecha(?string $flexibilidad_isquiotibiales_inicial_derecha): self
    {
        $this->flexibilidad_isquiotibiales_inicial_derecha = $flexibilidad_isquiotibiales_inicial_derecha;

        return $this;
    }

    public function getFlexibilidadIsquiotibialesFinalDerecha(): ?string
    {
        return $this->flexibilidad_isquiotibiales_final_derecha;
    }

    public function setFlexibilidadIsquiotibialesFinalDerecha(?string $flexibilidad_isquiotibiales_final_derecha): self
    {
        $this->flexibilidad_isquiotibiales_final_derecha = $flexibilidad_isquiotibiales_final_derecha;

        return $this;
    }

    public function getFlexibilidadIsquiotibialesInicialIzquierda(): ?string
    {
        return $this->flexibilidad_isquiotibiales_inicial_izquierda;
    }

    public function setFlexibilidadIsquiotibialesInicialIzquierda(?string $flexibilidad_isquiotibiales_inicial_izquierda): self
    {
        $this->flexibilidad_isquiotibiales_inicial_izquierda = $flexibilidad_isquiotibiales_inicial_izquierda;

        return $this;
    }

    public function getFlexibilidadIsquiotibialesFinalIzquierda(): ?string
    {
        return $this->flexibilidad_isquiotibiales_final_izquierda;
    }

    public function setFlexibilidadIsquiotibialesFinalIzquierda(?string $flexibilidad_isquiotibiales_final_izquierda): self
    {
        $this->flexibilidad_isquiotibiales_final_izquierda = $flexibilidad_isquiotibiales_final_izquierda;

        return $this;
    }

    public function getFlexibilidadGemeloSoleoInicialDerecha(): ?string
    {
        return $this->flexibilidad_gemelo_soleo_inicial_derecha;
    }

    public function setFlexibilidadGemeloSoleoInicialDerecha(?string $flexibilidad_gemelo_soleo_inicial_derecha): self
    {
        $this->flexibilidad_gemelo_soleo_inicial_derecha = $flexibilidad_gemelo_soleo_inicial_derecha;

        return $this;
    }

    public function getFlexibilidadGemeloSoleoFinalDerecha(): ?string
    {
        return $this->flexibilidad_gemelo_soleo_final_derecha;
    }

    public function setFlexibilidadGemeloSoleoFinalDerecha(?string $flexibilidad_gemelo_soleo_final_derecha): self
    {
        $this->flexibilidad_gemelo_soleo_final_derecha = $flexibilidad_gemelo_soleo_final_derecha;

        return $this;
    }

    public function getFlexibilidadGemeloSoleoInicialIzquierda(): ?string
    {
        return $this->flexibilidad_gemelo_soleo_inicial_izquierda;
    }

    public function setFlexibilidadGemeloSoleoInicialIzquierda(?string $flexibilidad_gemelo_soleo_inicial_izquierda): self
    {
        $this->flexibilidad_gemelo_soleo_inicial_izquierda = $flexibilidad_gemelo_soleo_inicial_izquierda;

        return $this;
    }

    public function getFlexibilidadGemeloSoleoFinalIzquierda(): ?string
    {
        return $this->flexibilidad_gemelo_soleo_final_izquierda;
    }

    public function setFlexibilidadGemeloSoleoFinalIzquierda(?string $flexibilidad_gemelo_soleo_final_izquierda): self
    {
        $this->flexibilidad_gemelo_soleo_final_izquierda = $flexibilidad_gemelo_soleo_final_izquierda;

        return $this;
    }

    public function getFlexibilidadFasciaPlantarInicialDerecha(): ?string
    {
        return $this->flexibilidad_fascia_plantar_inicial_derecha;
    }

    public function setFlexibilidadFasciaPlantarInicialDerecha(?string $flexibilidad_fascia_plantar_inicial_derecha): self
    {
        $this->flexibilidad_fascia_plantar_inicial_derecha = $flexibilidad_fascia_plantar_inicial_derecha;

        return $this;
    }

    public function getFlexibilidadFasciaPlantarFinalDerecha(): ?string
    {
        return $this->flexibilidad_fascia_plantar_final_derecha;
    }

    public function setFlexibilidadFasciaPlantarFinalDerecha(?string $flexibilidad_fascia_plantar_final_derecha): self
    {
        $this->flexibilidad_fascia_plantar_final_derecha = $flexibilidad_fascia_plantar_final_derecha;

        return $this;
    }

    public function getFlexibilidadFasciaPlantarInicialIzquierda(): ?string
    {
        return $this->flexibilidad_fascia_plantar_inicial_izquierda;
    }

    public function setFlexibilidadFasciaPlantarInicialIzquierda(?string $flexibilidad_fascia_plantar_inicial_izquierda): self
    {
        $this->flexibilidad_fascia_plantar_inicial_izquierda = $flexibilidad_fascia_plantar_inicial_izquierda;

        return $this;
    }

    public function getFlexibilidadFasciaPlantarFinalIzquierda(): ?string
    {
        return $this->flexibilidad_fascia_plantar_final_izquierda;
    }

    public function setFlexibilidadFasciaPlantarFinalIzquierda(?string $flexibilidad_fascia_plantar_final_izquierda): self
    {
        $this->flexibilidad_fascia_plantar_final_izquierda = $flexibilidad_fascia_plantar_final_izquierda;

        return $this;
    }

    public function getMarchaFaseApoyoInicialDerecha(): ?string
    {
        return $this->marcha_fase_apoyo_inicial_derecha;
    }

    public function setMarchaFaseApoyoInicialDerecha(?string $marcha_fase_apoyo_inicial_derecha): self
    {
        $this->marcha_fase_apoyo_inicial_derecha = $marcha_fase_apoyo_inicial_derecha;

        return $this;
    }

    public function getMarchaFaseApoyoFinalDerecha(): ?string
    {
        return $this->marcha_fase_apoyo_final_derecha;
    }

    public function setMarchaFaseApoyoFinalDerecha(?string $marcha_fase_apoyo_final_derecha): self
    {
        $this->marcha_fase_apoyo_final_derecha = $marcha_fase_apoyo_final_derecha;

        return $this;
    }

    public function getMarchaFaseApoyoInicialIzquierda(): ?string
    {
        return $this->marcha_fase_apoyo_inicial_izquierda;
    }

    public function setMarchaFaseApoyoInicialIzquierda(?string $marcha_fase_apoyo_inicial_izquierda): self
    {
        $this->marcha_fase_apoyo_inicial_izquierda = $marcha_fase_apoyo_inicial_izquierda;

        return $this;
    }

    public function getMarchaFaseApoyoFinalIzquierda(): ?string
    {
        return $this->marcha_fase_apoyo_final_izquierda;
    }

    public function setMarchaFaseApoyoFinalIzquierda(?string $marcha_fase_apoyo_final_izquierda): self
    {
        $this->marcha_fase_apoyo_final_izquierda = $marcha_fase_apoyo_final_izquierda;

        return $this;
    }

    public function getMarchaFaseBalanceoInicialDerecha(): ?string
    {
        return $this->marcha_fase_balanceo_inicial_derecha;
    }

    public function setMarchaFaseBalanceoInicialDerecha(?string $marcha_fase_balanceo_inicial_derecha): self
    {
        $this->marcha_fase_balanceo_inicial_derecha = $marcha_fase_balanceo_inicial_derecha;

        return $this;
    }

    public function getMarchaFaseBalanceoFinalDerecha(): ?string
    {
        return $this->marcha_fase_balanceo_final_derecha;
    }

    public function setMarchaFaseBalanceoFinalDerecha(?string $marcha_fase_balanceo_final_derecha): self
    {
        $this->marcha_fase_balanceo_final_derecha = $marcha_fase_balanceo_final_derecha;

        return $this;
    }

    public function getMarchaFaseBalanceoInicialIzquierda(): ?string
    {
        return $this->marcha_fase_balanceo_inicial_izquierda;
    }

    public function setMarchaFaseBalanceoInicialIzquierda(?string $marcha_fase_balanceo_inicial_izquierda): self
    {
        $this->marcha_fase_balanceo_inicial_izquierda = $marcha_fase_balanceo_inicial_izquierda;

        return $this;
    }

    public function getMarchaFaseBalanceoFinalIzquierda(): ?string
    {
        return $this->marcha_fase_balanceo_final_izquierda;
    }

    public function setMarchaFaseBalanceoFinalIzquierda(?string $marcha_fase_balanceo_final_izquierda): self
    {
        $this->marcha_fase_balanceo_final_izquierda = $marcha_fase_balanceo_final_izquierda;

        return $this;
    }

    public function getMarchaLongitudCadenciaInicialDerecha(): ?string
    {
        return $this->marcha_longitud_cadencia_inicial_derecha;
    }

    public function setMarchaLongitudCadenciaInicialDerecha(?string $marcha_longitud_cadencia_inicial_derecha): self
    {
        $this->marcha_longitud_cadencia_inicial_derecha = $marcha_longitud_cadencia_inicial_derecha;

        return $this;
    }

    public function getMarchaLongitudCadenciaFinalDerecha(): ?string
    {
        return $this->marcha_longitud_cadencia_final_derecha;
    }

    public function setMarchaLongitudCadenciaFinalDerecha(?string $marcha_longitud_cadencia_final_derecha): self
    {
        $this->marcha_longitud_cadencia_final_derecha = $marcha_longitud_cadencia_final_derecha;

        return $this;
    }

    public function getMarchaLongitudCadenciaInicialIzquierda(): ?string
    {
        return $this->marcha_longitud_cadencia_inicial_izquierda;
    }

    public function setMarchaLongitudCadenciaInicialIzquierda(?string $marcha_longitud_cadencia_inicial_izquierda): self
    {
        $this->marcha_longitud_cadencia_inicial_izquierda = $marcha_longitud_cadencia_inicial_izquierda;

        return $this;
    }

    public function getMarchaLongitudCadenciaFinalIzquierda(): ?string
    {
        return $this->marcha_longitud_cadencia_final_izquierda;
    }

    public function setMarchaLongitudCadenciaFinalIzquierda(?string $marcha_longitud_cadencia_final_izquierda): self
    {
        $this->marcha_longitud_cadencia_final_izquierda = $marcha_longitud_cadencia_final_izquierda;

        return $this;
    }

    public function getUbicacionEspacioSimetrico(): ?string
    {
        return $this->ubicacion_espacio_simetrico;
    }

    public function setUbicacionEspacioSimetrico(?string $ubicacion_espacio_simetrico): self
    {
        $this->ubicacion_espacio_simetrico = $ubicacion_espacio_simetrico;

        return $this;
    }

    public function getUbicacionEspacioAsimetrico(): ?string
    {
        return $this->ubicacion_espacio_asimetrico;
    }

    public function setUbicacionEspacioAsimetrico(?string $ubicacion_espacio_asimetrico): self
    {
        $this->ubicacion_espacio_asimetrico = $ubicacion_espacio_asimetrico;

        return $this;
    }

    public function getDinamicaLateral(): ?string
    {
        return $this->dinamica_lateral;
    }

    public function setDinamicaLateral(?string $dinamica_lateral): self
    {
        $this->dinamica_lateral = $dinamica_lateral;

        return $this;
    }

    public function getUnPieDerecho(): ?string
    {
        return $this->un_pie_derecho;
    }

    public function setUnPieDerecho(?string $un_pie_derecho): self
    {
        $this->un_pie_derecho = $un_pie_derecho;

        return $this;
    }

    public function getUnPieIzquierdo(): ?string
    {
        return $this->un_pie_izquierdo;
    }

    public function setUnPieIzquierdo(?string $un_pie_izquierdo): self
    {
        $this->un_pie_izquierdo = $un_pie_izquierdo;

        return $this;
    }

    public function getTratamientoFrio(): ?bool
    {
        return $this->tratamiento_frio;
    }

    public function setTratamientoFrio(?bool $tratamiento_frio): self
    {
        $this->tratamiento_frio = $tratamiento_frio;

        return $this;
    }

    public function getTratamientoCalor(): ?bool
    {
        return $this->tratamiento_calor;
    }

    public function setTratamientoCalor(?bool $tratamiento_calor): self
    {
        $this->tratamiento_calor = $tratamiento_calor;

        return $this;
    }

    public function getTratamientoMasaje(): ?bool
    {
        return $this->tratamiento_masaje;
    }

    public function setTratamientoMasaje(?bool $tratamiento_masaje): self
    {
        $this->tratamiento_masaje = $tratamiento_masaje;

        return $this;
    }

    public function getTratamientoUltrasonido(): ?bool
    {
        return $this->tratamiento_ultrasonido;
    }

    public function setTratamientoUltrasonido(?bool $tratamiento_ultrasonido): self
    {
        $this->tratamiento_ultrasonido = $tratamiento_ultrasonido;

        return $this;
    }

    public function getTratamientoTens(): ?bool
    {
        return $this->tratamiento_tens;
    }

    public function setTratamientoTens(?bool $tratamiento_tens): self
    {
        $this->tratamiento_tens = $tratamiento_tens;

        return $this;
    }

    public function getTratamientoHidroterapia(): ?bool
    {
        return $this->tratamiento_hidroterapia;
    }

    public function setTratamientoHidroterapia(?bool $tratamiento_hidroterapia): self
    {
        $this->tratamiento_hidroterapia = $tratamiento_hidroterapia;

        return $this;
    }

    public function getTratamientoParafina(): ?bool
    {
        return $this->tratamiento_parafina;
    }

    public function setTratamientoParafina(?bool $tratamiento_parafina): self
    {
        $this->tratamiento_parafina = $tratamiento_parafina;

        return $this;
    }

    public function getTratamientoHielo(): ?bool
    {
        return $this->tratamiento_hielo;
    }

    public function setTratamientoHielo(?bool $tratamiento_hielo): self
    {
        $this->tratamiento_hielo = $tratamiento_hielo;

        return $this;
    }

    public function getMasajesSedativo(): ?bool
    {
        return $this->masajes_sedativo;
    }

    public function setMasajesSedativo(?bool $masajes_sedativo): self
    {
        $this->masajes_sedativo = $masajes_sedativo;

        return $this;
    }

    public function getMasajesTejido(): ?bool
    {
        return $this->masajes_tejido;
    }

    public function setMasajesTejido(?bool $masajes_tejido): self
    {
        $this->masajes_tejido = $masajes_tejido;

        return $this;
    }

    public function getMasajesHielo(): ?bool
    {
        return $this->masajes_hielo;
    }

    public function setMasajesHielo(?bool $masajes_hielo): self
    {
        $this->masajes_hielo = $masajes_hielo;

        return $this;
    }

    public function getTecnFaciKabbat(): ?bool
    {
        return $this->tecn_faci_kabbat;
    }

    public function setTecnFaciKabbat(?bool $tecn_faci_kabbat): self
    {
        $this->tecn_faci_kabbat = $tecn_faci_kabbat;

        return $this;
    }

    public function getTecnFaciBobath(): ?bool
    {
        return $this->tecn_faci_bobath;
    }

    public function setTecnFaciBobath(?bool $tecn_faci_bobath): self
    {
        $this->tecn_faci_bobath = $tecn_faci_bobath;

        return $this;
    }

    public function getRehaPropPuntas(): ?bool
    {
        return $this->reha_prop_puntas;
    }

    public function setRehaPropPuntas(?bool $reha_prop_puntas): self
    {
        $this->reha_prop_puntas = $reha_prop_puntas;

        return $this;
    }

    public function getRehaPropTalones(): ?bool
    {
        return $this->reha_prop_talones;
    }

    public function setRehaPropTalones(?bool $reha_prop_talones): self
    {
        $this->reha_prop_talones = $reha_prop_talones;

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

    public function getEjerciciosEstiramientos(): ?bool
    {
        return $this->ejercicios_estiramientos;
    }

    public function setEjerciciosEstiramientos(?bool $ejercicios_estiramientos): self
    {
        $this->ejercicios_estiramientos = $ejercicios_estiramientos;

        return $this;
    }

    public function getAparatosBicicleta(): ?bool
    {
        return $this->aparatos_bicicleta;
    }

    public function setAparatosBicicleta(?bool $aparatos_bicicleta): self
    {
        $this->aparatos_bicicleta = $aparatos_bicicleta;

        return $this;
    }

    public function getAparatosBalancin(): ?bool
    {
        return $this->aparatos_balancin;
    }

    public function setAparatosBalancin(?bool $aparatos_balancin): self
    {
        $this->aparatos_balancin = $aparatos_balancin;

        return $this;
    }

    public function getAparatosBandas(): ?bool
    {
        return $this->aparatos_bandas;
    }

    public function setAparatosBandas(?bool $aparatos_bandas): self
    {
        $this->aparatos_bandas = $aparatos_bandas;

        return $this;
    }

    public function getAparatosBodyLine(): ?bool
    {
        return $this->aparatos_body_line;
    }

    public function setAparatosBodyLine(?bool $aparatos_body_line): self
    {
        $this->aparatos_body_line = $aparatos_body_line;

        return $this;
    }

    public function getAparatosTubing(): ?bool
    {
        return $this->aparatos_tubing;
    }

    public function setAparatosTubing(?bool $aparatos_tubing): self
    {
        $this->aparatos_tubing = $aparatos_tubing;

        return $this;
    }

    public function getAparatosMultifuerza(): ?bool
    {
        return $this->aparatos_multifuerza;
    }

    public function setAparatosMultifuerza(?bool $aparatos_multifuerza): self
    {
        $this->aparatos_multifuerza = $aparatos_multifuerza;

        return $this;
    }

    public function getAparatosStepper(): ?bool
    {
        return $this->aparatos_stepper;
    }

    public function setAparatosStepper(?bool $aparatos_stepper): self
    {
        $this->aparatos_stepper = $aparatos_stepper;

        return $this;
    }

    public function getOtrasKester(): ?bool
    {
        return $this->otras_kester;
    }

    public function setOtrasKester(?bool $otras_kester): self
    {
        $this->otras_kester = $otras_kester;

        return $this;
    }

    public function getOtrasOdonohieu(): ?bool
    {
        return $this->otras_odonohieu;
    }

    public function setOtrasOdonohieu(?bool $otras_odonohieu): self
    {
        $this->otras_odonohieu = $otras_odonohieu;

        return $this;
    }

    public function getOtrasCadenaCinetica(): ?bool
    {
        return $this->otras_cadena_cinetica;
    }

    public function setOtrasCadenaCinetica(?bool $otras_cadena_cinetica): self
    {
        $this->otras_cadena_cinetica = $otras_cadena_cinetica;

        return $this;
    }

    public function getEntrenamientoMarchaBarras(): ?bool
    {
        return $this->entrenamiento_marcha_barras;
    }

    public function setEntrenamientoMarchaBarras(?bool $entrenamiento_marcha_barras): self
    {
        $this->entrenamiento_marcha_barras = $entrenamiento_marcha_barras;

        return $this;
    }

    public function getSaltosFrente(): ?bool
    {
        return $this->saltos_frente;
    }

    public function setSaltosFrente(?bool $saltos_frente): self
    {
        $this->saltos_frente = $saltos_frente;

        return $this;
    }

    public function getSaltosLateral(): ?string
    {
        return $this->saltos_lateral;
    }

    public function setSaltosLateral(?string $saltos_lateral): self
    {
        $this->saltos_lateral = $saltos_lateral;

        return $this;
    }

    public function getSaltos1Pie(): ?bool
    {
        return $this->saltos_1_pie;
    }

    public function setSaltos1Pie(?bool $saltos_1_pie): self
    {
        $this->saltos_1_pie = $saltos_1_pie;

        return $this;
    }

    public function getSaltos2Pies(): ?bool
    {
        return $this->saltos_2_pies;
    }

    public function setSaltos2Pies(?bool $saltos_2_pies): self
    {
        $this->saltos_2_pies = $saltos_2_pies;

        return $this;
    }

    public function getObjetivosTratamiento(): ?string
    {
        return $this->objetivos_tratamiento;
    }

    public function setObjetivosTratamiento(string $objetivos_tratamiento): self
    {
        $this->objetivos_tratamiento = $objetivos_tratamiento;

        return $this;
    }

    public function getResumenFinalTratamiento(): ?string
    {
        return $this->resumen_final_tratamiento;
    }

    public function setResumenFinalTratamiento(string $resumen_final_tratamiento): self
    {
        $this->resumen_final_tratamiento = $resumen_final_tratamiento;

        return $this;
    }
}
