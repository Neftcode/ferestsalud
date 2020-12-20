<?php

namespace App\Entity;

use App\Repository\ValoracionColumnaVertebralRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ValoracionColumnaVertebralRepository::class)
 */
class ValoracionColumnaVertebral
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
    private $dolor_inicial_espasmos;

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
    private $dolor_final_retracciones;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $sensibilidad_normal;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $hipoestesia;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $hiperestesia;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $parestesia;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $anestesia;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $alodinia;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $mov_arti_flexion_inicial_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $mov_arti_flexion_final_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $mov_arti_flexion_inicial_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $mov_arti_flexion_final_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $mov_arti_extension_inicial_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $mov_arti_extension_final_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $mov_arti_extension_inicial_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $mov_arti_extension_final_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $mov_arti_inclinacion_inicial_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $mov_arti_inclinacion_final_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $mov_arti_inclinacion_inicial_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $mov_arti_inclinacion_final_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $mov_arti_rotacion_inicial_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $mov_arti_rotacion_final_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $mov_arti_rotacion_inicial_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $mov_arti_rotacion_final_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $fuer_musc_ecm_inicial_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $fuer_musc_ecm_final_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $fuer_musc_ecm_inicial_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $fuer_musc_ecm_final_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $fuer_musc_esplenio_inicial_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $fuer_musc_esplenio_final_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $fuer_musc_esplenio_inicial_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $fuer_musc_esplenio_final_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $fuer_musc_escalenos_inicial_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $fuer_musc_escalenos_final_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $fuer_musc_escalenos_inicial_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $fuer_musc_escalenos_final_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $fuer_musc_abdominales_altos_inicial_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $fuer_musc_abdominales_altos_final_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $fuer_musc_abdominales_altos_inicial_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $fuer_musc_abdominales_altos_final_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $fuer_musc_abdominales_bajos_inicial_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $fuer_musc_abdominales_bajos_final_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $fuer_musc_abdominales_bajos_inicial_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $fuer_musc_abdominales_bajos_final_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $fuer_musc_oblicuos_inicial_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $fuer_musc_oblicuos_final_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $fuer_musc_oblicuos_inicial_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $fuer_musc_oblicuos_final_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $fuer_musc_espinales_altos_inicial_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $fuer_musc_espinales_altos_final_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $fuer_musc_espinales_altos_inicial_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $fuer_musc_espinales_altos_final_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $fuer_musc_espinales_bajos_inicial_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $fuer_musc_espinales_bajos_final_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $fuer_musc_espinales_bajos_inicial_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $fuer_musc_espinales_bajos_final_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $flexibilidad_ecm_inicial_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $flexibilidad_ecm_final_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $flexibilidad_ecm_inicial_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $flexibilidad_ecm_final_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $flexibilidad_escalenos_inicial_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $flexibilidad_escalenos_final_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $flexibilidad_escalenos_inicial_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $flexibilidad_escalenos_final_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $flexibilidad_pectoral_inicial_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $flexibilidad_pectoral_final_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $flexibilidad_pectoral_inicial_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $flexibilidad_pectoral_final_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $flexibilidad_espinales_bajos_inicial_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $flexibilidad_espinales_bajos_final_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $flexibilidad_espinales_bajos_inicial_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $flexibilidad_espinales_bajos_final_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $flexibilidad_psoas_inicial_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $flexibilidad_psoas_final_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $flexibilidad_psoas_inicial_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $flexibilidad_psoas_final_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $flexibilidad_isquitibiales_inicial_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $flexibilidad_isquitibiales_final_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $flexibilidad_isquitibiales_inicial_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $flexibilidad_isquitibiales_final_izquierda;

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
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $ubicacion_espacio_simetrico;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $ubicacion_espacio_asimetrico;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $dinamica_lateral;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $solo_pie_derecho;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $solo_pie_izquierdo;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $dolor_durante_movimiento;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $dolor_final_movimiento;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $postura_vista_ant;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $postura_vista_post;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $postura_vista_lateral;

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
    private $tratamiento_ultrasonido;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $tratamiento_tens;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $tratamiento_toques_hielo;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $masajes_sedativo;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $masajes_tejido_conectivo;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $masajes_hielo;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $masajes_vibratorio;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $tecn_facil_kabbat;

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
    private $aparatos_escalerilla;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $aparatos_polea;

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
    private $aparatos_traccion_cefalica;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $otras_kester;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $acti_coti_escritas;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $acti_coti_verbal;

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

    public function getDolorInicialEspasmos(): ?string
    {
        return $this->dolor_inicial_espasmos;
    }

    public function setDolorInicialEspasmos(?string $dolor_inicial_espasmos): self
    {
        $this->dolor_inicial_espasmos = $dolor_inicial_espasmos;

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

    public function getDolorFinalRetracciones(): ?string
    {
        return $this->dolor_final_retracciones;
    }

    public function setDolorFinalRetracciones(?string $dolor_final_retracciones): self
    {
        $this->dolor_final_retracciones = $dolor_final_retracciones;

        return $this;
    }

    public function getSensibilidadNormal(): ?string
    {
        return $this->sensibilidad_normal;
    }

    public function setSensibilidadNormal(?string $sensibilidad_normal): self
    {
        $this->sensibilidad_normal = $sensibilidad_normal;

        return $this;
    }

    public function getHipoestesia(): ?string
    {
        return $this->hipoestesia;
    }

    public function setHipoestesia(?string $hipoestesia): self
    {
        $this->hipoestesia = $hipoestesia;

        return $this;
    }

    public function getHiperestesia(): ?string
    {
        return $this->hiperestesia;
    }

    public function setHiperestesia(?string $hiperestesia): self
    {
        $this->hiperestesia = $hiperestesia;

        return $this;
    }

    public function getParestesia(): ?string
    {
        return $this->parestesia;
    }

    public function setParestesia(string $parestesia): self
    {
        $this->parestesia = $parestesia;

        return $this;
    }

    public function getAnestesia(): ?string
    {
        return $this->anestesia;
    }

    public function setAnestesia(?string $anestesia): self
    {
        $this->anestesia = $anestesia;

        return $this;
    }

    public function getAlodinia(): ?string
    {
        return $this->alodinia;
    }

    public function setAlodinia(?string $alodinia): self
    {
        $this->alodinia = $alodinia;

        return $this;
    }

    public function getMovArtiFlexionInicialDerecha(): ?string
    {
        return $this->mov_arti_flexion_inicial_derecha;
    }

    public function setMovArtiFlexionInicialDerecha(?string $mov_arti_flexion_inicial_derecha): self
    {
        $this->mov_arti_flexion_inicial_derecha = $mov_arti_flexion_inicial_derecha;

        return $this;
    }

    public function getMovArtiFlexionFinalDerecha(): ?string
    {
        return $this->mov_arti_flexion_final_derecha;
    }

    public function setMovArtiFlexionFinalDerecha(?string $mov_arti_flexion_final_derecha): self
    {
        $this->mov_arti_flexion_final_derecha = $mov_arti_flexion_final_derecha;

        return $this;
    }

    public function getMovArtiFlexionInicialIzquierda(): ?string
    {
        return $this->mov_arti_flexion_inicial_izquierda;
    }

    public function setMovArtiFlexionInicialIzquierda(?string $mov_arti_flexion_inicial_izquierda): self
    {
        $this->mov_arti_flexion_inicial_izquierda = $mov_arti_flexion_inicial_izquierda;

        return $this;
    }

    public function getMovArtiFlexionFinalIzquierda(): ?string
    {
        return $this->mov_arti_flexion_final_izquierda;
    }

    public function setMovArtiFlexionFinalIzquierda(?string $mov_arti_flexion_final_izquierda): self
    {
        $this->mov_arti_flexion_final_izquierda = $mov_arti_flexion_final_izquierda;

        return $this;
    }

    public function getMovArtiExtensionInicialDerecha(): ?string
    {
        return $this->mov_arti_extension_inicial_derecha;
    }

    public function setMovArtiExtensionInicialDerecha(?string $mov_arti_extension_inicial_derecha): self
    {
        $this->mov_arti_extension_inicial_derecha = $mov_arti_extension_inicial_derecha;

        return $this;
    }

    public function getMovArtiExtensionFinalDerecha(): ?string
    {
        return $this->mov_arti_extension_final_derecha;
    }

    public function setMovArtiExtensionFinalDerecha(?string $mov_arti_extension_final_derecha): self
    {
        $this->mov_arti_extension_final_derecha = $mov_arti_extension_final_derecha;

        return $this;
    }

    public function getMovArtiExtensionInicialIzquierda(): ?string
    {
        return $this->mov_arti_extension_inicial_izquierda;
    }

    public function setMovArtiExtensionInicialIzquierda(?string $mov_arti_extension_inicial_izquierda): self
    {
        $this->mov_arti_extension_inicial_izquierda = $mov_arti_extension_inicial_izquierda;

        return $this;
    }

    public function getMovArtiExtensionFinalIzquierda(): ?string
    {
        return $this->mov_arti_extension_final_izquierda;
    }

    public function setMovArtiExtensionFinalIzquierda(?string $mov_arti_extension_final_izquierda): self
    {
        $this->mov_arti_extension_final_izquierda = $mov_arti_extension_final_izquierda;

        return $this;
    }

    public function getMovArtiInclinacionInicialDerecha(): ?string
    {
        return $this->mov_arti_inclinacion_inicial_derecha;
    }

    public function setMovArtiInclinacionInicialDerecha(?string $mov_arti_inclinacion_inicial_derecha): self
    {
        $this->mov_arti_inclinacion_inicial_derecha = $mov_arti_inclinacion_inicial_derecha;

        return $this;
    }

    public function getMovArtiInclinacionFinalDerecha(): ?string
    {
        return $this->mov_arti_inclinacion_final_derecha;
    }

    public function setMovArtiInclinacionFinalDerecha(?string $mov_arti_inclinacion_final_derecha): self
    {
        $this->mov_arti_inclinacion_final_derecha = $mov_arti_inclinacion_final_derecha;

        return $this;
    }

    public function getMovArtiInclinacionInicialIzquierda(): ?string
    {
        return $this->mov_arti_inclinacion_inicial_izquierda;
    }

    public function setMovArtiInclinacionInicialIzquierda(?string $mov_arti_inclinacion_inicial_izquierda): self
    {
        $this->mov_arti_inclinacion_inicial_izquierda = $mov_arti_inclinacion_inicial_izquierda;

        return $this;
    }

    public function getMovArtiInclinacionFinalIzquierda(): ?string
    {
        return $this->mov_arti_inclinacion_final_izquierda;
    }

    public function setMovArtiInclinacionFinalIzquierda(?string $mov_arti_inclinacion_final_izquierda): self
    {
        $this->mov_arti_inclinacion_final_izquierda = $mov_arti_inclinacion_final_izquierda;

        return $this;
    }

    public function getMovArtiRotacionInicialDerecha(): ?string
    {
        return $this->mov_arti_rotacion_inicial_derecha;
    }

    public function setMovArtiRotacionInicialDerecha(?string $mov_arti_rotacion_inicial_derecha): self
    {
        $this->mov_arti_rotacion_inicial_derecha = $mov_arti_rotacion_inicial_derecha;

        return $this;
    }

    public function getMovArtiRotacionFinalDerecha(): ?string
    {
        return $this->mov_arti_rotacion_final_derecha;
    }

    public function setMovArtiRotacionFinalDerecha(?string $mov_arti_rotacion_final_derecha): self
    {
        $this->mov_arti_rotacion_final_derecha = $mov_arti_rotacion_final_derecha;

        return $this;
    }

    public function getMovArtiRotacionInicialIzquierda(): ?string
    {
        return $this->mov_arti_rotacion_inicial_izquierda;
    }

    public function setMovArtiRotacionInicialIzquierda(?string $mov_arti_rotacion_inicial_izquierda): self
    {
        $this->mov_arti_rotacion_inicial_izquierda = $mov_arti_rotacion_inicial_izquierda;

        return $this;
    }

    public function getMovArtiRotacionFinalIzquierda(): ?string
    {
        return $this->mov_arti_rotacion_final_izquierda;
    }

    public function setMovArtiRotacionFinalIzquierda(?string $mov_arti_rotacion_final_izquierda): self
    {
        $this->mov_arti_rotacion_final_izquierda = $mov_arti_rotacion_final_izquierda;

        return $this;
    }

    public function getFuerMuscEcmInicialDerecha(): ?string
    {
        return $this->fuer_musc_ecm_inicial_derecha;
    }

    public function setFuerMuscEcmInicialDerecha(?string $fuer_musc_ecm_inicial_derecha): self
    {
        $this->fuer_musc_ecm_inicial_derecha = $fuer_musc_ecm_inicial_derecha;

        return $this;
    }

    public function getFuerMuscEcmFinalDerecha(): ?string
    {
        return $this->fuer_musc_ecm_final_derecha;
    }

    public function setFuerMuscEcmFinalDerecha(?string $fuer_musc_ecm_final_derecha): self
    {
        $this->fuer_musc_ecm_final_derecha = $fuer_musc_ecm_final_derecha;

        return $this;
    }

    public function getFuerMuscEcmInicialIzquierda(): ?string
    {
        return $this->fuer_musc_ecm_inicial_izquierda;
    }

    public function setFuerMuscEcmInicialIzquierda(?string $fuer_musc_ecm_inicial_izquierda): self
    {
        $this->fuer_musc_ecm_inicial_izquierda = $fuer_musc_ecm_inicial_izquierda;

        return $this;
    }

    public function getFuerMuscEcmFinalIzquierda(): ?string
    {
        return $this->fuer_musc_ecm_final_izquierda;
    }

    public function setFuerMuscEcmFinalIzquierda(?string $fuer_musc_ecm_final_izquierda): self
    {
        $this->fuer_musc_ecm_final_izquierda = $fuer_musc_ecm_final_izquierda;

        return $this;
    }

    public function getFuerMuscEsplenioInicialDerecha(): ?string
    {
        return $this->fuer_musc_esplenio_inicial_derecha;
    }

    public function setFuerMuscEsplenioInicialDerecha(?string $fuer_musc_esplenio_inicial_derecha): self
    {
        $this->fuer_musc_esplenio_inicial_derecha = $fuer_musc_esplenio_inicial_derecha;

        return $this;
    }

    public function getFuerMuscEsplenioFinalDerecha(): ?string
    {
        return $this->fuer_musc_esplenio_final_derecha;
    }

    public function setFuerMuscEsplenioFinalDerecha(?string $fuer_musc_esplenio_final_derecha): self
    {
        $this->fuer_musc_esplenio_final_derecha = $fuer_musc_esplenio_final_derecha;

        return $this;
    }

    public function getFuerMuscEsplenioInicialIzquierda(): ?string
    {
        return $this->fuer_musc_esplenio_inicial_izquierda;
    }

    public function setFuerMuscEsplenioInicialIzquierda(?string $fuer_musc_esplenio_inicial_izquierda): self
    {
        $this->fuer_musc_esplenio_inicial_izquierda = $fuer_musc_esplenio_inicial_izquierda;

        return $this;
    }

    public function getFuerMuscEsplenioFinalIzquierda(): ?string
    {
        return $this->fuer_musc_esplenio_final_izquierda;
    }

    public function setFuerMuscEsplenioFinalIzquierda(?string $fuer_musc_esplenio_final_izquierda): self
    {
        $this->fuer_musc_esplenio_final_izquierda = $fuer_musc_esplenio_final_izquierda;

        return $this;
    }

    public function getFuerMuscEscalenosInicialDerecha(): ?string
    {
        return $this->fuer_musc_escalenos_inicial_derecha;
    }

    public function setFuerMuscEscalenosInicialDerecha(?string $fuer_musc_escalenos_inicial_derecha): self
    {
        $this->fuer_musc_escalenos_inicial_derecha = $fuer_musc_escalenos_inicial_derecha;

        return $this;
    }

    public function getFuerMuscEscalenosFinalDerecha(): ?string
    {
        return $this->fuer_musc_escalenos_final_derecha;
    }

    public function setFuerMuscEscalenosFinalDerecha(?string $fuer_musc_escalenos_final_derecha): self
    {
        $this->fuer_musc_escalenos_final_derecha = $fuer_musc_escalenos_final_derecha;

        return $this;
    }

    public function getFuerMuscEscalenosInicialIzquierda(): ?string
    {
        return $this->fuer_musc_escalenos_inicial_izquierda;
    }

    public function setFuerMuscEscalenosInicialIzquierda(?string $fuer_musc_escalenos_inicial_izquierda): self
    {
        $this->fuer_musc_escalenos_inicial_izquierda = $fuer_musc_escalenos_inicial_izquierda;

        return $this;
    }

    public function getFuerMuscEscalenosFinalIzquierda(): ?string
    {
        return $this->fuer_musc_escalenos_final_izquierda;
    }

    public function setFuerMuscEscalenosFinalIzquierda(?string $fuer_musc_escalenos_final_izquierda): self
    {
        $this->fuer_musc_escalenos_final_izquierda = $fuer_musc_escalenos_final_izquierda;

        return $this;
    }

    public function getFuerMuscAbdominalesAltosInicialDerecha(): ?string
    {
        return $this->fuer_musc_abdominales_altos_inicial_derecha;
    }

    public function setFuerMuscAbdominalesAltosInicialDerecha(?string $fuer_musc_abdominales_altos_inicial_derecha): self
    {
        $this->fuer_musc_abdominales_altos_inicial_derecha = $fuer_musc_abdominales_altos_inicial_derecha;

        return $this;
    }

    public function getFuerMuscAbdominalesAltosFinalDerecha(): ?string
    {
        return $this->fuer_musc_abdominales_altos_final_derecha;
    }

    public function setFuerMuscAbdominalesAltosFinalDerecha(?string $fuer_musc_abdominales_altos_final_derecha): self
    {
        $this->fuer_musc_abdominales_altos_final_derecha = $fuer_musc_abdominales_altos_final_derecha;

        return $this;
    }

    public function getFuerMuscAbdominalesAltosInicialIzquierda(): ?string
    {
        return $this->fuer_musc_abdominales_altos_inicial_izquierda;
    }

    public function setFuerMuscAbdominalesAltosInicialIzquierda(?string $fuer_musc_abdominales_altos_inicial_izquierda): self
    {
        $this->fuer_musc_abdominales_altos_inicial_izquierda = $fuer_musc_abdominales_altos_inicial_izquierda;

        return $this;
    }

    public function getFuerMuscAbdominalesAltosFinalIzquierda(): ?string
    {
        return $this->fuer_musc_abdominales_altos_final_izquierda;
    }

    public function setFuerMuscAbdominalesAltosFinalIzquierda(?string $fuer_musc_abdominales_altos_final_izquierda): self
    {
        $this->fuer_musc_abdominales_altos_final_izquierda = $fuer_musc_abdominales_altos_final_izquierda;

        return $this;
    }

    public function getFuerMuscAbdominalesBajosInicialDerecha(): ?string
    {
        return $this->fuer_musc_abdominales_bajos_inicial_derecha;
    }

    public function setFuerMuscAbdominalesBajosInicialDerecha(?string $fuer_musc_abdominales_bajos_inicial_derecha): self
    {
        $this->fuer_musc_abdominales_bajos_inicial_derecha = $fuer_musc_abdominales_bajos_inicial_derecha;

        return $this;
    }

    public function getFuerMuscAbdominalesBajosFinalDerecha(): ?string
    {
        return $this->fuer_musc_abdominales_bajos_final_derecha;
    }

    public function setFuerMuscAbdominalesBajosFinalDerecha(?string $fuer_musc_abdominales_bajos_final_derecha): self
    {
        $this->fuer_musc_abdominales_bajos_final_derecha = $fuer_musc_abdominales_bajos_final_derecha;

        return $this;
    }

    public function getFuerMuscAbdominalesBajosInicialIzquierda(): ?string
    {
        return $this->fuer_musc_abdominales_bajos_inicial_izquierda;
    }

    public function setFuerMuscAbdominalesBajosInicialIzquierda(?string $fuer_musc_abdominales_bajos_inicial_izquierda): self
    {
        $this->fuer_musc_abdominales_bajos_inicial_izquierda = $fuer_musc_abdominales_bajos_inicial_izquierda;

        return $this;
    }

    public function getFuerMuscAbdominalesBajosFinalIzquierda(): ?string
    {
        return $this->fuer_musc_abdominales_bajos_final_izquierda;
    }

    public function setFuerMuscAbdominalesBajosFinalIzquierda(?string $fuer_musc_abdominales_bajos_final_izquierda): self
    {
        $this->fuer_musc_abdominales_bajos_final_izquierda = $fuer_musc_abdominales_bajos_final_izquierda;

        return $this;
    }

    public function getFuerMuscOblicuosInicialDerecha(): ?string
    {
        return $this->fuer_musc_oblicuos_inicial_derecha;
    }

    public function setFuerMuscOblicuosInicialDerecha(?string $fuer_musc_oblicuos_inicial_derecha): self
    {
        $this->fuer_musc_oblicuos_inicial_derecha = $fuer_musc_oblicuos_inicial_derecha;

        return $this;
    }

    public function getFuerMuscOblicuosFinalDerecha(): ?string
    {
        return $this->fuer_musc_oblicuos_final_derecha;
    }

    public function setFuerMuscOblicuosFinalDerecha(?string $fuer_musc_oblicuos_final_derecha): self
    {
        $this->fuer_musc_oblicuos_final_derecha = $fuer_musc_oblicuos_final_derecha;

        return $this;
    }

    public function getFuerMuscOblicuosInicialIzquierda(): ?string
    {
        return $this->fuer_musc_oblicuos_inicial_izquierda;
    }

    public function setFuerMuscOblicuosInicialIzquierda(?string $fuer_musc_oblicuos_inicial_izquierda): self
    {
        $this->fuer_musc_oblicuos_inicial_izquierda = $fuer_musc_oblicuos_inicial_izquierda;

        return $this;
    }

    public function getFuerMuscOblicuosFinalIzquierda(): ?string
    {
        return $this->fuer_musc_oblicuos_final_izquierda;
    }

    public function setFuerMuscOblicuosFinalIzquierda(?string $fuer_musc_oblicuos_final_izquierda): self
    {
        $this->fuer_musc_oblicuos_final_izquierda = $fuer_musc_oblicuos_final_izquierda;

        return $this;
    }

    public function getFuerMuscEspinalesAltosInicialDerecha(): ?string
    {
        return $this->fuer_musc_espinales_altos_inicial_derecha;
    }

    public function setFuerMuscEspinalesAltosInicialDerecha(?string $fuer_musc_espinales_altos_inicial_derecha): self
    {
        $this->fuer_musc_espinales_altos_inicial_derecha = $fuer_musc_espinales_altos_inicial_derecha;

        return $this;
    }

    public function getFuerMuscEspinalesAltosFinalDerecha(): ?string
    {
        return $this->fuer_musc_espinales_altos_final_derecha;
    }

    public function setFuerMuscEspinalesAltosFinalDerecha(?string $fuer_musc_espinales_altos_final_derecha): self
    {
        $this->fuer_musc_espinales_altos_final_derecha = $fuer_musc_espinales_altos_final_derecha;

        return $this;
    }

    public function getFuerMuscEspinalesAltosInicialIzquierda(): ?string
    {
        return $this->fuer_musc_espinales_altos_inicial_izquierda;
    }

    public function setFuerMuscEspinalesAltosInicialIzquierda(?string $fuer_musc_espinales_altos_inicial_izquierda): self
    {
        $this->fuer_musc_espinales_altos_inicial_izquierda = $fuer_musc_espinales_altos_inicial_izquierda;

        return $this;
    }

    public function getFuerMuscEspinalesAltosFinalIzquierda(): ?string
    {
        return $this->fuer_musc_espinales_altos_final_izquierda;
    }

    public function setFuerMuscEspinalesAltosFinalIzquierda(?string $fuer_musc_espinales_altos_final_izquierda): self
    {
        $this->fuer_musc_espinales_altos_final_izquierda = $fuer_musc_espinales_altos_final_izquierda;

        return $this;
    }

    public function getFuerMuscEspinalesBajosInicialDerecha(): ?string
    {
        return $this->fuer_musc_espinales_bajos_inicial_derecha;
    }

    public function setFuerMuscEspinalesBajosInicialDerecha(?string $fuer_musc_espinales_bajos_inicial_derecha): self
    {
        $this->fuer_musc_espinales_bajos_inicial_derecha = $fuer_musc_espinales_bajos_inicial_derecha;

        return $this;
    }

    public function getFuerMuscEspinalesBajosFinalDerecha(): ?string
    {
        return $this->fuer_musc_espinales_bajos_final_derecha;
    }

    public function setFuerMuscEspinalesBajosFinalDerecha(?string $fuer_musc_espinales_bajos_final_derecha): self
    {
        $this->fuer_musc_espinales_bajos_final_derecha = $fuer_musc_espinales_bajos_final_derecha;

        return $this;
    }

    public function getFuerMuscEspinalesBajosInicialIzquierda(): ?string
    {
        return $this->fuer_musc_espinales_bajos_inicial_izquierda;
    }

    public function setFuerMuscEspinalesBajosInicialIzquierda(?string $fuer_musc_espinales_bajos_inicial_izquierda): self
    {
        $this->fuer_musc_espinales_bajos_inicial_izquierda = $fuer_musc_espinales_bajos_inicial_izquierda;

        return $this;
    }

    public function getFuerMuscEspinalesBajosFinalIzquierda(): ?string
    {
        return $this->fuer_musc_espinales_bajos_final_izquierda;
    }

    public function setFuerMuscEspinalesBajosFinalIzquierda(?string $fuer_musc_espinales_bajos_final_izquierda): self
    {
        $this->fuer_musc_espinales_bajos_final_izquierda = $fuer_musc_espinales_bajos_final_izquierda;

        return $this;
    }

    public function getFlexibilidadEcmInicialDerecha(): ?string
    {
        return $this->flexibilidad_ecm_inicial_derecha;
    }

    public function setFlexibilidadEcmInicialDerecha(?string $flexibilidad_ecm_inicial_derecha): self
    {
        $this->flexibilidad_ecm_inicial_derecha = $flexibilidad_ecm_inicial_derecha;

        return $this;
    }

    public function getFlexibilidadEcmFinalDerecha(): ?string
    {
        return $this->flexibilidad_ecm_final_derecha;
    }

    public function setFlexibilidadEcmFinalDerecha(?string $flexibilidad_ecm_final_derecha): self
    {
        $this->flexibilidad_ecm_final_derecha = $flexibilidad_ecm_final_derecha;

        return $this;
    }

    public function getFlexibilidadEcmInicialIzquierda(): ?string
    {
        return $this->flexibilidad_ecm_inicial_izquierda;
    }

    public function setFlexibilidadEcmInicialIzquierda(?string $flexibilidad_ecm_inicial_izquierda): self
    {
        $this->flexibilidad_ecm_inicial_izquierda = $flexibilidad_ecm_inicial_izquierda;

        return $this;
    }

    public function getFlexibilidadEcmFinalIzquierda(): ?string
    {
        return $this->flexibilidad_ecm_final_izquierda;
    }

    public function setFlexibilidadEcmFinalIzquierda(?string $flexibilidad_ecm_final_izquierda): self
    {
        $this->flexibilidad_ecm_final_izquierda = $flexibilidad_ecm_final_izquierda;

        return $this;
    }

    public function getFlexibilidadEscalenosInicialDerecha(): ?string
    {
        return $this->flexibilidad_escalenos_inicial_derecha;
    }

    public function setFlexibilidadEscalenosInicialDerecha(?string $flexibilidad_escalenos_inicial_derecha): self
    {
        $this->flexibilidad_escalenos_inicial_derecha = $flexibilidad_escalenos_inicial_derecha;

        return $this;
    }

    public function getFlexibilidadEscalenosFinalDerecha(): ?string
    {
        return $this->flexibilidad_escalenos_final_derecha;
    }

    public function setFlexibilidadEscalenosFinalDerecha(?string $flexibilidad_escalenos_final_derecha): self
    {
        $this->flexibilidad_escalenos_final_derecha = $flexibilidad_escalenos_final_derecha;

        return $this;
    }

    public function getFlexibilidadEscalenosInicialIzquierda(): ?string
    {
        return $this->flexibilidad_escalenos_inicial_izquierda;
    }

    public function setFlexibilidadEscalenosInicialIzquierda(?string $flexibilidad_escalenos_inicial_izquierda): self
    {
        $this->flexibilidad_escalenos_inicial_izquierda = $flexibilidad_escalenos_inicial_izquierda;

        return $this;
    }

    public function getFlexibilidadEscalenosFinalIzquierda(): ?string
    {
        return $this->flexibilidad_escalenos_final_izquierda;
    }

    public function setFlexibilidadEscalenosFinalIzquierda(?string $flexibilidad_escalenos_final_izquierda): self
    {
        $this->flexibilidad_escalenos_final_izquierda = $flexibilidad_escalenos_final_izquierda;

        return $this;
    }

    public function getFlexibilidadPectoralInicialDerecha(): ?string
    {
        return $this->flexibilidad_pectoral_inicial_derecha;
    }

    public function setFlexibilidadPectoralInicialDerecha(?string $flexibilidad_pectoral_inicial_derecha): self
    {
        $this->flexibilidad_pectoral_inicial_derecha = $flexibilidad_pectoral_inicial_derecha;

        return $this;
    }

    public function getFlexibilidadPectoralFinalDerecha(): ?string
    {
        return $this->flexibilidad_pectoral_final_derecha;
    }

    public function setFlexibilidadPectoralFinalDerecha(?string $flexibilidad_pectoral_final_derecha): self
    {
        $this->flexibilidad_pectoral_final_derecha = $flexibilidad_pectoral_final_derecha;

        return $this;
    }

    public function getFlexibilidadPectoralInicialIzquierda(): ?string
    {
        return $this->flexibilidad_pectoral_inicial_izquierda;
    }

    public function setFlexibilidadPectoralInicialIzquierda(?string $flexibilidad_pectoral_inicial_izquierda): self
    {
        $this->flexibilidad_pectoral_inicial_izquierda = $flexibilidad_pectoral_inicial_izquierda;

        return $this;
    }

    public function getFlexibilidadPectoralFinalIzquierda(): ?string
    {
        return $this->flexibilidad_pectoral_final_izquierda;
    }

    public function setFlexibilidadPectoralFinalIzquierda(?string $flexibilidad_pectoral_final_izquierda): self
    {
        $this->flexibilidad_pectoral_final_izquierda = $flexibilidad_pectoral_final_izquierda;

        return $this;
    }

    public function getFlexibilidadEspinalesBajosInicialDerecha(): ?string
    {
        return $this->flexibilidad_espinales_bajos_inicial_derecha;
    }

    public function setFlexibilidadEspinalesBajosInicialDerecha(?string $flexibilidad_espinales_bajos_inicial_derecha): self
    {
        $this->flexibilidad_espinales_bajos_inicial_derecha = $flexibilidad_espinales_bajos_inicial_derecha;

        return $this;
    }

    public function getFlexibilidadEspinalesBajosFinalDerecha(): ?string
    {
        return $this->flexibilidad_espinales_bajos_final_derecha;
    }

    public function setFlexibilidadEspinalesBajosFinalDerecha(?string $flexibilidad_espinales_bajos_final_derecha): self
    {
        $this->flexibilidad_espinales_bajos_final_derecha = $flexibilidad_espinales_bajos_final_derecha;

        return $this;
    }

    public function getFlexibilidadEspinalesBajosInicialIzquierda(): ?string
    {
        return $this->flexibilidad_espinales_bajos_inicial_izquierda;
    }

    public function setFlexibilidadEspinalesBajosInicialIzquierda(?string $flexibilidad_espinales_bajos_inicial_izquierda): self
    {
        $this->flexibilidad_espinales_bajos_inicial_izquierda = $flexibilidad_espinales_bajos_inicial_izquierda;

        return $this;
    }

    public function getFlexibilidadEspinalesBajosFinalIzquierda(): ?string
    {
        return $this->flexibilidad_espinales_bajos_final_izquierda;
    }

    public function setFlexibilidadEspinalesBajosFinalIzquierda(?string $flexibilidad_espinales_bajos_final_izquierda): self
    {
        $this->flexibilidad_espinales_bajos_final_izquierda = $flexibilidad_espinales_bajos_final_izquierda;

        return $this;
    }

    public function getFlexibilidadPsoasInicialDerecha(): ?string
    {
        return $this->flexibilidad_psoas_inicial_derecha;
    }

    public function setFlexibilidadPsoasInicialDerecha(?string $flexibilidad_psoas_inicial_derecha): self
    {
        $this->flexibilidad_psoas_inicial_derecha = $flexibilidad_psoas_inicial_derecha;

        return $this;
    }

    public function getFlexibilidadPsoasFinalDerecha(): ?string
    {
        return $this->flexibilidad_psoas_final_derecha;
    }

    public function setFlexibilidadPsoasFinalDerecha(?string $flexibilidad_psoas_final_derecha): self
    {
        $this->flexibilidad_psoas_final_derecha = $flexibilidad_psoas_final_derecha;

        return $this;
    }

    public function getFlexibilidadPsoasInicialIzquierda(): ?string
    {
        return $this->flexibilidad_psoas_inicial_izquierda;
    }

    public function setFlexibilidadPsoasInicialIzquierda(?string $flexibilidad_psoas_inicial_izquierda): self
    {
        $this->flexibilidad_psoas_inicial_izquierda = $flexibilidad_psoas_inicial_izquierda;

        return $this;
    }

    public function getFlexibilidadPsoasFinalIzquierda(): ?string
    {
        return $this->flexibilidad_psoas_final_izquierda;
    }

    public function setFlexibilidadPsoasFinalIzquierda(?string $flexibilidad_psoas_final_izquierda): self
    {
        $this->flexibilidad_psoas_final_izquierda = $flexibilidad_psoas_final_izquierda;

        return $this;
    }

    public function getFlexibilidadIsquitibialesInicialDerecha(): ?string
    {
        return $this->flexibilidad_isquitibiales_inicial_derecha;
    }

    public function setFlexibilidadIsquitibialesInicialDerecha(?string $flexibilidad_isquitibiales_inicial_derecha): self
    {
        $this->flexibilidad_isquitibiales_inicial_derecha = $flexibilidad_isquitibiales_inicial_derecha;

        return $this;
    }

    public function getFlexibilidadIsquitibialesFinalDerecha(): ?string
    {
        return $this->flexibilidad_isquitibiales_final_derecha;
    }

    public function setFlexibilidadIsquitibialesFinalDerecha(?string $flexibilidad_isquitibiales_final_derecha): self
    {
        $this->flexibilidad_isquitibiales_final_derecha = $flexibilidad_isquitibiales_final_derecha;

        return $this;
    }

    public function getFlexibilidadIsquitibialesInicialIzquierda(): ?string
    {
        return $this->flexibilidad_isquitibiales_inicial_izquierda;
    }

    public function setFlexibilidadIsquitibialesInicialIzquierda(?string $flexibilidad_isquitibiales_inicial_izquierda): self
    {
        $this->flexibilidad_isquitibiales_inicial_izquierda = $flexibilidad_isquitibiales_inicial_izquierda;

        return $this;
    }

    public function getFlexibilidadIsquitibialesFinalIzquierda(): ?string
    {
        return $this->flexibilidad_isquitibiales_final_izquierda;
    }

    public function setFlexibilidadIsquitibialesFinalIzquierda(?string $flexibilidad_isquitibiales_final_izquierda): self
    {
        $this->flexibilidad_isquitibiales_final_izquierda = $flexibilidad_isquitibiales_final_izquierda;

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

    public function getSoloPieDerecho(): ?string
    {
        return $this->solo_pie_derecho;
    }

    public function setSoloPieDerecho(?string $solo_pie_derecho): self
    {
        $this->solo_pie_derecho = $solo_pie_derecho;

        return $this;
    }

    public function getSoloPieIzquierdo(): ?string
    {
        return $this->solo_pie_izquierdo;
    }

    public function setSoloPieIzquierdo(?string $solo_pie_izquierdo): self
    {
        $this->solo_pie_izquierdo = $solo_pie_izquierdo;

        return $this;
    }

    public function getDolorDuranteMovimiento(): ?bool
    {
        return $this->dolor_durante_movimiento;
    }

    public function setDolorDuranteMovimiento(?bool $dolor_durante_movimiento): self
    {
        $this->dolor_durante_movimiento = $dolor_durante_movimiento;

        return $this;
    }

    public function getDolorFinalMovimiento(): ?bool
    {
        return $this->dolor_final_movimiento;
    }

    public function setDolorFinalMovimiento(?bool $dolor_final_movimiento): self
    {
        $this->dolor_final_movimiento = $dolor_final_movimiento;

        return $this;
    }

    public function getPosturaVistaAnt(): ?string
    {
        return $this->postura_vista_ant;
    }

    public function setPosturaVistaAnt(?string $postura_vista_ant): self
    {
        $this->postura_vista_ant = $postura_vista_ant;

        return $this;
    }

    public function getPosturaVistaPost(): ?string
    {
        return $this->postura_vista_post;
    }

    public function setPosturaVistaPost(?string $postura_vista_post): self
    {
        $this->postura_vista_post = $postura_vista_post;

        return $this;
    }

    public function getPosturaVistaLateral(): ?string
    {
        return $this->postura_vista_lateral;
    }

    public function setPosturaVistaLateral(?string $postura_vista_lateral): self
    {
        $this->postura_vista_lateral = $postura_vista_lateral;

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

    public function getTratamientoToquesHielo(): ?bool
    {
        return $this->tratamiento_toques_hielo;
    }

    public function setTratamientoToquesHielo(?bool $tratamiento_toques_hielo): self
    {
        $this->tratamiento_toques_hielo = $tratamiento_toques_hielo;

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

    public function getMasajesTejidoConectivo(): ?bool
    {
        return $this->masajes_tejido_conectivo;
    }

    public function setMasajesTejidoConectivo(?bool $masajes_tejido_conectivo): self
    {
        $this->masajes_tejido_conectivo = $masajes_tejido_conectivo;

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

    public function getMasajesVibratorio(): ?bool
    {
        return $this->masajes_vibratorio;
    }

    public function setMasajesVibratorio(?bool $masajes_vibratorio): self
    {
        $this->masajes_vibratorio = $masajes_vibratorio;

        return $this;
    }

    public function getTecnFacilKabbat(): ?bool
    {
        return $this->tecn_facil_kabbat;
    }

    public function setTecnFacilKabbat(?bool $tecn_facil_kabbat): self
    {
        $this->tecn_facil_kabbat = $tecn_facil_kabbat;

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

    public function getAparatosEscalerilla(): ?bool
    {
        return $this->aparatos_escalerilla;
    }

    public function setAparatosEscalerilla(?bool $aparatos_escalerilla): self
    {
        $this->aparatos_escalerilla = $aparatos_escalerilla;

        return $this;
    }

    public function getAparatosPolea(): ?bool
    {
        return $this->aparatos_polea;
    }

    public function setAparatosPolea(?bool $aparatos_polea): self
    {
        $this->aparatos_polea = $aparatos_polea;

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

    public function getAparatosTraccionCefalica(): ?bool
    {
        return $this->aparatos_traccion_cefalica;
    }

    public function setAparatosTraccionCefalica(?bool $aparatos_traccion_cefalica): self
    {
        $this->aparatos_traccion_cefalica = $aparatos_traccion_cefalica;

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

    public function getActiCotiEscritas(): ?bool
    {
        return $this->acti_coti_escritas;
    }

    public function setActiCotiEscritas(?bool $acti_coti_escritas): self
    {
        $this->acti_coti_escritas = $acti_coti_escritas;

        return $this;
    }

    public function getActiCotiVerbal(): ?bool
    {
        return $this->acti_coti_verbal;
    }

    public function setActiCotiVerbal(?bool $acti_coti_verbal): self
    {
        $this->acti_coti_verbal = $acti_coti_verbal;

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
