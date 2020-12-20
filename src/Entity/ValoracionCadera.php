<?php

namespace App\Entity;

use App\Repository\ValoracionCaderaRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ValoracionCaderaRepository::class)
 */
class ValoracionCadera
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
    private $mov_arti_abduccion_45_inicial_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $mov_arti_abduccion_45_final_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $mov_arti_abduccion_45_inicial_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $mov_arti_abduccion_45_final_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $mov_arti_abduccion_30_45_inicial_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $mov_arti_abduccion_30_45_final_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $mov_arti_abduccion_30_45_inicial_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $mov_arti_abduccion_30_45_final_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $mov_arti_rotacion_interna_inicial_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $mov_arti_rotacion_interna_final_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $mov_arti_rotacion_interna_inicial_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $mov_arti_rotacion_interna_final_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $mov_arti_rotacion_externa_inicial_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $mov_arti_rotacion_externa_final_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $mov_arti_rotacion_externa_inicial_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $mov_arti_rotacion_externa_final_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $fuer_musc_psoas_inicial_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $fuer_musc_psoas_final_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $fuer_musc_psoas_inicial_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $fuer_musc_psoas_final_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $fuer_musc_gluteo_mayor_inicial_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $fuer_musc_gluteo_mayor_final_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $fuer_musc_gluteo_mayor_inicial_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $fuer_musc_gluteo_mayor_final_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $fuer_musc_gluteo_medio_inicial_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $fuer_musc_gluteo_medio_final_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $fuer_musc_gluteo_medio_inicial_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $fuer_musc_gluteo_medio_final_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $fuer_musc_gluteo_menor_inicial_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $fuer_musc_gluteo_menor_final_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $fuer_musc_gluteo_menor_inicial_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $fuer_musc_gluteo_menor_final_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $fuer_musc_aductores_inicial_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $fuer_musc_aductores_final_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $fuer_musc_aductores_inicial_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $fuer_musc_aductores_final_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $flexibilidad_test_ober_inicial_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $flexibilidad_test_ober_final_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $flexibilidad_test_ober_inicial_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $flexibilidad_test_ober_final_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $flexibilidad_test_thomas_inicial_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $flexibilidad_test_thomas_final_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $flexibilidad_test_thomas_inicial_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $flexibilidad_test_thomas_final_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $flexibilidad_aductores_inicial_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $flexibilidad_aductores_final_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $flexibilidad_aductores_inicial_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $flexibilidad_aductores_final_izquierda;

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
    private $tratamiento_estimulacion;

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
    private $otras_cadena_cinematica;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $entre_marcha_barras;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $saltos_frente;

    /**
     * @ORM\Column(type="boolean", nullable=true)
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

    public function getMovArtiAbduccion45InicialDerecha(): ?string
    {
        return $this->mov_arti_abduccion_45_inicial_derecha;
    }

    public function setMovArtiAbduccion45InicialDerecha(?string $mov_arti_abduccion_45_inicial_derecha): self
    {
        $this->mov_arti_abduccion_45_inicial_derecha = $mov_arti_abduccion_45_inicial_derecha;

        return $this;
    }

    public function getMovArtiAbduccion45FinalDerecha(): ?string
    {
        return $this->mov_arti_abduccion_45_final_derecha;
    }

    public function setMovArtiAbduccion45FinalDerecha(?string $mov_arti_abduccion_45_final_derecha): self
    {
        $this->mov_arti_abduccion_45_final_derecha = $mov_arti_abduccion_45_final_derecha;

        return $this;
    }

    public function getMovArtiAbduccion45InicialIzquierda(): ?string
    {
        return $this->mov_arti_abduccion_45_inicial_izquierda;
    }

    public function setMovArtiAbduccion45InicialIzquierda(?string $mov_arti_abduccion_45_inicial_izquierda): self
    {
        $this->mov_arti_abduccion_45_inicial_izquierda = $mov_arti_abduccion_45_inicial_izquierda;

        return $this;
    }

    public function getMovArtiAbduccion45FinalIzquierda(): ?string
    {
        return $this->mov_arti_abduccion_45_final_izquierda;
    }

    public function setMovArtiAbduccion45FinalIzquierda(?string $mov_arti_abduccion_45_final_izquierda): self
    {
        $this->mov_arti_abduccion_45_final_izquierda = $mov_arti_abduccion_45_final_izquierda;

        return $this;
    }

    public function getMovArtiAbduccion3045InicialDerecha(): ?string
    {
        return $this->mov_arti_abduccion_30_45_inicial_derecha;
    }

    public function setMovArtiAbduccion3045InicialDerecha(?string $mov_arti_abduccion_30_45_inicial_derecha): self
    {
        $this->mov_arti_abduccion_30_45_inicial_derecha = $mov_arti_abduccion_30_45_inicial_derecha;

        return $this;
    }

    public function getMovArtiAbduccion3045FinalDerecha(): ?string
    {
        return $this->mov_arti_abduccion_30_45_final_derecha;
    }

    public function setMovArtiAbduccion3045FinalDerecha(?string $mov_arti_abduccion_30_45_final_derecha): self
    {
        $this->mov_arti_abduccion_30_45_final_derecha = $mov_arti_abduccion_30_45_final_derecha;

        return $this;
    }

    public function getMovArtiAbduccion3045InicialIzquierda(): ?string
    {
        return $this->mov_arti_abduccion_30_45_inicial_izquierda;
    }

    public function setMovArtiAbduccion3045InicialIzquierda(?string $mov_arti_abduccion_30_45_inicial_izquierda): self
    {
        $this->mov_arti_abduccion_30_45_inicial_izquierda = $mov_arti_abduccion_30_45_inicial_izquierda;

        return $this;
    }

    public function getMovArtiAbduccion3045FinalIzquierda(): ?string
    {
        return $this->mov_arti_abduccion_30_45_final_izquierda;
    }

    public function setMovArtiAbduccion3045FinalIzquierda(?string $mov_arti_abduccion_30_45_final_izquierda): self
    {
        $this->mov_arti_abduccion_30_45_final_izquierda = $mov_arti_abduccion_30_45_final_izquierda;

        return $this;
    }

    public function getMovArtiRotacionInternaInicialDerecha(): ?string
    {
        return $this->mov_arti_rotacion_interna_inicial_derecha;
    }

    public function setMovArtiRotacionInternaInicialDerecha(?string $mov_arti_rotacion_interna_inicial_derecha): self
    {
        $this->mov_arti_rotacion_interna_inicial_derecha = $mov_arti_rotacion_interna_inicial_derecha;

        return $this;
    }

    public function getMovArtiRotacionInternaFinalDerecha(): ?string
    {
        return $this->mov_arti_rotacion_interna_final_derecha;
    }

    public function setMovArtiRotacionInternaFinalDerecha(?string $mov_arti_rotacion_interna_final_derecha): self
    {
        $this->mov_arti_rotacion_interna_final_derecha = $mov_arti_rotacion_interna_final_derecha;

        return $this;
    }

    public function getMovArtiRotacionInternaInicialIzquierda(): ?string
    {
        return $this->mov_arti_rotacion_interna_inicial_izquierda;
    }

    public function setMovArtiRotacionInternaInicialIzquierda(?string $mov_arti_rotacion_interna_inicial_izquierda): self
    {
        $this->mov_arti_rotacion_interna_inicial_izquierda = $mov_arti_rotacion_interna_inicial_izquierda;

        return $this;
    }

    public function getMovArtiRotacionInternaFinalIzquierda(): ?string
    {
        return $this->mov_arti_rotacion_interna_final_izquierda;
    }

    public function setMovArtiRotacionInternaFinalIzquierda(?string $mov_arti_rotacion_interna_final_izquierda): self
    {
        $this->mov_arti_rotacion_interna_final_izquierda = $mov_arti_rotacion_interna_final_izquierda;

        return $this;
    }

    public function getMovArtiRotacionExternaInicialDerecha(): ?string
    {
        return $this->mov_arti_rotacion_externa_inicial_derecha;
    }

    public function setMovArtiRotacionExternaInicialDerecha(?string $mov_arti_rotacion_externa_inicial_derecha): self
    {
        $this->mov_arti_rotacion_externa_inicial_derecha = $mov_arti_rotacion_externa_inicial_derecha;

        return $this;
    }

    public function getMovArtiRotacionExternaFinalDerecha(): ?string
    {
        return $this->mov_arti_rotacion_externa_final_derecha;
    }

    public function setMovArtiRotacionExternaFinalDerecha(?string $mov_arti_rotacion_externa_final_derecha): self
    {
        $this->mov_arti_rotacion_externa_final_derecha = $mov_arti_rotacion_externa_final_derecha;

        return $this;
    }

    public function getMovArtiRotacionExternaInicialIzquierda(): ?string
    {
        return $this->mov_arti_rotacion_externa_inicial_izquierda;
    }

    public function setMovArtiRotacionExternaInicialIzquierda(?string $mov_arti_rotacion_externa_inicial_izquierda): self
    {
        $this->mov_arti_rotacion_externa_inicial_izquierda = $mov_arti_rotacion_externa_inicial_izquierda;

        return $this;
    }

    public function getMovArtiRotacionExternaFinalIzquierda(): ?string
    {
        return $this->mov_arti_rotacion_externa_final_izquierda;
    }

    public function setMovArtiRotacionExternaFinalIzquierda(?string $mov_arti_rotacion_externa_final_izquierda): self
    {
        $this->mov_arti_rotacion_externa_final_izquierda = $mov_arti_rotacion_externa_final_izquierda;

        return $this;
    }

    public function getFuerMuscPsoasInicialDerecha(): ?string
    {
        return $this->fuer_musc_psoas_inicial_derecha;
    }

    public function setFuerMuscPsoasInicialDerecha(?string $fuer_musc_psoas_inicial_derecha): self
    {
        $this->fuer_musc_psoas_inicial_derecha = $fuer_musc_psoas_inicial_derecha;

        return $this;
    }

    public function getFuerMuscPsoasFinalDerecha(): ?string
    {
        return $this->fuer_musc_psoas_final_derecha;
    }

    public function setFuerMuscPsoasFinalDerecha(?string $fuer_musc_psoas_final_derecha): self
    {
        $this->fuer_musc_psoas_final_derecha = $fuer_musc_psoas_final_derecha;

        return $this;
    }

    public function getFuerMuscPsoasInicialIzquierda(): ?string
    {
        return $this->fuer_musc_psoas_inicial_izquierda;
    }

    public function setFuerMuscPsoasInicialIzquierda(?string $fuer_musc_psoas_inicial_izquierda): self
    {
        $this->fuer_musc_psoas_inicial_izquierda = $fuer_musc_psoas_inicial_izquierda;

        return $this;
    }

    public function getFuerMuscPsoasFinalIzquierda(): ?string
    {
        return $this->fuer_musc_psoas_final_izquierda;
    }

    public function setFuerMuscPsoasFinalIzquierda(?string $fuer_musc_psoas_final_izquierda): self
    {
        $this->fuer_musc_psoas_final_izquierda = $fuer_musc_psoas_final_izquierda;

        return $this;
    }

    public function getFuerMuscGluteoMayorInicialDerecha(): ?string
    {
        return $this->fuer_musc_gluteo_mayor_inicial_derecha;
    }

    public function setFuerMuscGluteoMayorInicialDerecha(?string $fuer_musc_gluteo_mayor_inicial_derecha): self
    {
        $this->fuer_musc_gluteo_mayor_inicial_derecha = $fuer_musc_gluteo_mayor_inicial_derecha;

        return $this;
    }

    public function getFuerMuscGluteoMayorFinalDerecha(): ?string
    {
        return $this->fuer_musc_gluteo_mayor_final_derecha;
    }

    public function setFuerMuscGluteoMayorFinalDerecha(?string $fuer_musc_gluteo_mayor_final_derecha): self
    {
        $this->fuer_musc_gluteo_mayor_final_derecha = $fuer_musc_gluteo_mayor_final_derecha;

        return $this;
    }

    public function getFuerMuscGluteoMayorInicialIzquierda(): ?string
    {
        return $this->fuer_musc_gluteo_mayor_inicial_izquierda;
    }

    public function setFuerMuscGluteoMayorInicialIzquierda(?string $fuer_musc_gluteo_mayor_inicial_izquierda): self
    {
        $this->fuer_musc_gluteo_mayor_inicial_izquierda = $fuer_musc_gluteo_mayor_inicial_izquierda;

        return $this;
    }

    public function getFuerMuscGluteoMayorFinalIzquierda(): ?string
    {
        return $this->fuer_musc_gluteo_mayor_final_izquierda;
    }

    public function setFuerMuscGluteoMayorFinalIzquierda(?string $fuer_musc_gluteo_mayor_final_izquierda): self
    {
        $this->fuer_musc_gluteo_mayor_final_izquierda = $fuer_musc_gluteo_mayor_final_izquierda;

        return $this;
    }

    public function getFuerMuscGluteoMedioInicialDerecha(): ?string
    {
        return $this->fuer_musc_gluteo_medio_inicial_derecha;
    }

    public function setFuerMuscGluteoMedioInicialDerecha(?string $fuer_musc_gluteo_medio_inicial_derecha): self
    {
        $this->fuer_musc_gluteo_medio_inicial_derecha = $fuer_musc_gluteo_medio_inicial_derecha;

        return $this;
    }

    public function getFuerMuscGluteoMedioFinalDerecha(): ?string
    {
        return $this->fuer_musc_gluteo_medio_final_derecha;
    }

    public function setFuerMuscGluteoMedioFinalDerecha(?string $fuer_musc_gluteo_medio_final_derecha): self
    {
        $this->fuer_musc_gluteo_medio_final_derecha = $fuer_musc_gluteo_medio_final_derecha;

        return $this;
    }

    public function getFuerMuscGluteoMedioInicialIzquierda(): ?string
    {
        return $this->fuer_musc_gluteo_medio_inicial_izquierda;
    }

    public function setFuerMuscGluteoMedioInicialIzquierda(?string $fuer_musc_gluteo_medio_inicial_izquierda): self
    {
        $this->fuer_musc_gluteo_medio_inicial_izquierda = $fuer_musc_gluteo_medio_inicial_izquierda;

        return $this;
    }

    public function getFuerMuscGluteoMedioFinalIzquierda(): ?string
    {
        return $this->fuer_musc_gluteo_medio_final_izquierda;
    }

    public function setFuerMuscGluteoMedioFinalIzquierda(?string $fuer_musc_gluteo_medio_final_izquierda): self
    {
        $this->fuer_musc_gluteo_medio_final_izquierda = $fuer_musc_gluteo_medio_final_izquierda;

        return $this;
    }

    public function getFuerMuscGluteoMenorInicialDerecha(): ?string
    {
        return $this->fuer_musc_gluteo_menor_inicial_derecha;
    }

    public function setFuerMuscGluteoMenorInicialDerecha(?string $fuer_musc_gluteo_menor_inicial_derecha): self
    {
        $this->fuer_musc_gluteo_menor_inicial_derecha = $fuer_musc_gluteo_menor_inicial_derecha;

        return $this;
    }

    public function getFuerMuscGluteoMenorFinalDerecha(): ?string
    {
        return $this->fuer_musc_gluteo_menor_final_derecha;
    }

    public function setFuerMuscGluteoMenorFinalDerecha(?string $fuer_musc_gluteo_menor_final_derecha): self
    {
        $this->fuer_musc_gluteo_menor_final_derecha = $fuer_musc_gluteo_menor_final_derecha;

        return $this;
    }

    public function getFuerMuscGluteoMenorInicialIzquierda(): ?string
    {
        return $this->fuer_musc_gluteo_menor_inicial_izquierda;
    }

    public function setFuerMuscGluteoMenorInicialIzquierda(?string $fuer_musc_gluteo_menor_inicial_izquierda): self
    {
        $this->fuer_musc_gluteo_menor_inicial_izquierda = $fuer_musc_gluteo_menor_inicial_izquierda;

        return $this;
    }

    public function getFuerMuscGluteoMenorFinalIzquierda(): ?string
    {
        return $this->fuer_musc_gluteo_menor_final_izquierda;
    }

    public function setFuerMuscGluteoMenorFinalIzquierda(?string $fuer_musc_gluteo_menor_final_izquierda): self
    {
        $this->fuer_musc_gluteo_menor_final_izquierda = $fuer_musc_gluteo_menor_final_izquierda;

        return $this;
    }

    public function getFuerMuscAductoresInicialDerecha(): ?string
    {
        return $this->fuer_musc_aductores_inicial_derecha;
    }

    public function setFuerMuscAductoresInicialDerecha(?string $fuer_musc_aductores_inicial_derecha): self
    {
        $this->fuer_musc_aductores_inicial_derecha = $fuer_musc_aductores_inicial_derecha;

        return $this;
    }

    public function getFuerMuscAductoresFinalDerecha(): ?string
    {
        return $this->fuer_musc_aductores_final_derecha;
    }

    public function setFuerMuscAductoresFinalDerecha(?string $fuer_musc_aductores_final_derecha): self
    {
        $this->fuer_musc_aductores_final_derecha = $fuer_musc_aductores_final_derecha;

        return $this;
    }

    public function getFuerMuscAductoresInicialIzquierda(): ?string
    {
        return $this->fuer_musc_aductores_inicial_izquierda;
    }

    public function setFuerMuscAductoresInicialIzquierda(?string $fuer_musc_aductores_inicial_izquierda): self
    {
        $this->fuer_musc_aductores_inicial_izquierda = $fuer_musc_aductores_inicial_izquierda;

        return $this;
    }

    public function getFuerMuscAductoresFinalIzquierda(): ?string
    {
        return $this->fuer_musc_aductores_final_izquierda;
    }

    public function setFuerMuscAductoresFinalIzquierda(?string $fuer_musc_aductores_final_izquierda): self
    {
        $this->fuer_musc_aductores_final_izquierda = $fuer_musc_aductores_final_izquierda;

        return $this;
    }

    public function getFlexibilidadTestOberInicialDerecha(): ?string
    {
        return $this->flexibilidad_test_ober_inicial_derecha;
    }

    public function setFlexibilidadTestOberInicialDerecha(?string $flexibilidad_test_ober_inicial_derecha): self
    {
        $this->flexibilidad_test_ober_inicial_derecha = $flexibilidad_test_ober_inicial_derecha;

        return $this;
    }

    public function getFlexibilidadTestOberFinalDerecha(): ?string
    {
        return $this->flexibilidad_test_ober_final_derecha;
    }

    public function setFlexibilidadTestOberFinalDerecha(?string $flexibilidad_test_ober_final_derecha): self
    {
        $this->flexibilidad_test_ober_final_derecha = $flexibilidad_test_ober_final_derecha;

        return $this;
    }

    public function getFlexibilidadTestOberInicialIzquierda(): ?string
    {
        return $this->flexibilidad_test_ober_inicial_izquierda;
    }

    public function setFlexibilidadTestOberInicialIzquierda(?string $flexibilidad_test_ober_inicial_izquierda): self
    {
        $this->flexibilidad_test_ober_inicial_izquierda = $flexibilidad_test_ober_inicial_izquierda;

        return $this;
    }

    public function getFlexibilidadTestOberFinalIzquierda(): ?string
    {
        return $this->flexibilidad_test_ober_final_izquierda;
    }

    public function setFlexibilidadTestOberFinalIzquierda(?string $flexibilidad_test_ober_final_izquierda): self
    {
        $this->flexibilidad_test_ober_final_izquierda = $flexibilidad_test_ober_final_izquierda;

        return $this;
    }

    public function getFlexibilidadTestThomasInicialDerecha(): ?string
    {
        return $this->flexibilidad_test_thomas_inicial_derecha;
    }

    public function setFlexibilidadTestThomasInicialDerecha(?string $flexibilidad_test_thomas_inicial_derecha): self
    {
        $this->flexibilidad_test_thomas_inicial_derecha = $flexibilidad_test_thomas_inicial_derecha;

        return $this;
    }

    public function getFlexibilidadTestThomasFinalDerecha(): ?string
    {
        return $this->flexibilidad_test_thomas_final_derecha;
    }

    public function setFlexibilidadTestThomasFinalDerecha(?string $flexibilidad_test_thomas_final_derecha): self
    {
        $this->flexibilidad_test_thomas_final_derecha = $flexibilidad_test_thomas_final_derecha;

        return $this;
    }

    public function getFlexibilidadTestThomasInicialIzquierda(): ?string
    {
        return $this->flexibilidad_test_thomas_inicial_izquierda;
    }

    public function setFlexibilidadTestThomasInicialIzquierda(?string $flexibilidad_test_thomas_inicial_izquierda): self
    {
        $this->flexibilidad_test_thomas_inicial_izquierda = $flexibilidad_test_thomas_inicial_izquierda;

        return $this;
    }

    public function getFlexibilidadTestThomasFinalIzquierda(): ?string
    {
        return $this->flexibilidad_test_thomas_final_izquierda;
    }

    public function setFlexibilidadTestThomasFinalIzquierda(?string $flexibilidad_test_thomas_final_izquierda): self
    {
        $this->flexibilidad_test_thomas_final_izquierda = $flexibilidad_test_thomas_final_izquierda;

        return $this;
    }

    public function getFlexibilidadAductoresInicialDerecha(): ?string
    {
        return $this->flexibilidad_aductores_inicial_derecha;
    }

    public function setFlexibilidadAductoresInicialDerecha(?string $flexibilidad_aductores_inicial_derecha): self
    {
        $this->flexibilidad_aductores_inicial_derecha = $flexibilidad_aductores_inicial_derecha;

        return $this;
    }

    public function getFlexibilidadAductoresFinalDerecha(): ?string
    {
        return $this->flexibilidad_aductores_final_derecha;
    }

    public function setFlexibilidadAductoresFinalDerecha(?string $flexibilidad_aductores_final_derecha): self
    {
        $this->flexibilidad_aductores_final_derecha = $flexibilidad_aductores_final_derecha;

        return $this;
    }

    public function getFlexibilidadAductoresInicialIzquierda(): ?string
    {
        return $this->flexibilidad_aductores_inicial_izquierda;
    }

    public function setFlexibilidadAductoresInicialIzquierda(?string $flexibilidad_aductores_inicial_izquierda): self
    {
        $this->flexibilidad_aductores_inicial_izquierda = $flexibilidad_aductores_inicial_izquierda;

        return $this;
    }

    public function getFlexibilidadAductoresFinalIzquierda(): ?string
    {
        return $this->flexibilidad_aductores_final_izquierda;
    }

    public function setFlexibilidadAductoresFinalIzquierda(?string $flexibilidad_aductores_final_izquierda): self
    {
        $this->flexibilidad_aductores_final_izquierda = $flexibilidad_aductores_final_izquierda;

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

    public function getTratamientoEstimulacion(): ?bool
    {
        return $this->tratamiento_estimulacion;
    }

    public function setTratamientoEstimulacion(?bool $tratamiento_estimulacion): self
    {
        $this->tratamiento_estimulacion = $tratamiento_estimulacion;

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

    public function getOtrasCadenaCinematica(): ?bool
    {
        return $this->otras_cadena_cinematica;
    }

    public function setOtrasCadenaCinematica(?bool $otras_cadena_cinematica): self
    {
        $this->otras_cadena_cinematica = $otras_cadena_cinematica;

        return $this;
    }

    public function getEntreMarchaBarras(): ?bool
    {
        return $this->entre_marcha_barras;
    }

    public function setEntreMarchaBarras(?bool $entre_marcha_barras): self
    {
        $this->entre_marcha_barras = $entre_marcha_barras;

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

    public function getSaltosLateral(): ?bool
    {
        return $this->saltos_lateral;
    }

    public function setSaltosLateral(?bool $saltos_lateral): self
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
