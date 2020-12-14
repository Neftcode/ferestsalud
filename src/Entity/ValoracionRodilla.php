<?php

namespace App\Entity;

use App\Repository\ValoracionRodillaRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ValoracionRodillaRepository::class)
 */
class ValoracionRodilla
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
    private $edema_polo_suprapatelar_inicial_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $edema_polo_suprapatelar_final_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $edema_polo_suprapatelar_inicial_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $edema_polo_suprapatelar_final_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $edema_transarticular_rodilla_inicial_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $edema_transarticular_rodilla_final_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $edema_transarticular_rodilla_inicial_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $edema_transarticular_rodilla_final_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $edema_polo_infrapatelar_inicial_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $edema_polo_infrapatelar_final_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $edema_polo_infrapatelar_inicial_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $edema_polo_infrapatelar_final_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $trofismo_suprapatelar_inicial_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $trofismo_suprapatelar_final_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $trofismo_suprapatelar_inicial_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $trofismo_suprapatelar_final_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $trofismo_infrapatelar_inicial_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $trofismo_infrapatelar_final_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $trofismo_infrapatelar_inicial_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $trofismo_infrapatelar_final_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $mov_rotu_normal_inicial_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $mov_rotu_normal_final_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $mov_rotu_normal_inicial_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $mov_rotu_normalfinal_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $mov_rotu_rigidez_inicial_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $mov_rotu_rigidez_final_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $mov_rotu_rigidez_inicial_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $mov_rotu_rigidez_final_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $mov_rotu_hipermovil_inicial_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $mov_rotu_hipermovil_final_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $mov_rotu_hipermovil_inicial_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $mov_rotu_hipermovil_final_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $mov_rotu_hipomovil_inicial_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $mov_rotu_hipomovil_final_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $mov_rotu_hipomovil_inicial_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $mov_rotu_hipomovil_final_izquierda;

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
    private $fuer_musc_cuadriceps_inicial_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $fuer_musc_cuadriceps_final_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $fuer_musc_cuadriceps_inicial_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $fuer_musc_cuadriceps_final_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $fuer_musc_isquiotibiales_inicial_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $fuer_musc_isquiotibiales_final_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $fuer_musc_isquiotibiales_inicial_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $fuer_musc_isquiotibiales_final_izquierda;

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
    private $flexibilidad_test_ely_inicial_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $flexibilidad_test_ely_final_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $flexibilidad_test_ely_inicial_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $flexibilidad_test_ely_final_izquierda;

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
    private $flexibilidad_isquiotibiales_inicial_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $flexibilidad_isquiotibiales_finial_derecha;

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
    private $prue_espe_lachman_inicial_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $prue_espe_lachman_final_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $prue_espe_lachman_inicial_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $prue_espe_lachman_final_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $prue_espe_test_valgo_inicial_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $prue_espe_test_valgo_finaal_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $prue_espe_test_valgo_inicial_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $prue_espe_test_valgo_final_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $prue_espe_test_varo_inicial_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $prue_espe_test_varo_final_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $prue_espe_test_varo_inicial_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $prue_espe_test_varo_final_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $prue_espe_cajon_anterior_inicial_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $prue_espe_cajon_anterior_final_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $prue_espe_cajon_anterior_inicial_izquierda;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $prue_espe_cajon_anterior_final_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $prue_espe_cajon_posterior_inicial_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $prue_espe_cajon_posterior_final_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $prue_espe_cajon_posterior_inicial_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $prue_espe_cajon_posterior_final_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $prue_espe_appley_inicial_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $prue_espe_appley_final_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $prue_espe_appley_inicial_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $prue_espe_appley_final_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
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
    private $tratamiento_ultrasonido;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $tratamiento_tens;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $tratamiento_hidroterapia;

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
    private $tecn_faci_kabbat;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $reha_prop_puntas;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
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

    public function getEdemaPoloSuprapatelarInicialDerecha(): ?string
    {
        return $this->edema_polo_suprapatelar_inicial_derecha;
    }

    public function setEdemaPoloSuprapatelarInicialDerecha(?string $edema_polo_suprapatelar_inicial_derecha): self
    {
        $this->edema_polo_suprapatelar_inicial_derecha = $edema_polo_suprapatelar_inicial_derecha;

        return $this;
    }

    public function getEdemaPoloSuprapatelarFinalDerecha(): ?string
    {
        return $this->edema_polo_suprapatelar_final_derecha;
    }

    public function setEdemaPoloSuprapatelarFinalDerecha(?string $edema_polo_suprapatelar_final_derecha): self
    {
        $this->edema_polo_suprapatelar_final_derecha = $edema_polo_suprapatelar_final_derecha;

        return $this;
    }

    public function getEdemaPoloSuprapatelarInicialIzquierda(): ?string
    {
        return $this->edema_polo_suprapatelar_inicial_izquierda;
    }

    public function setEdemaPoloSuprapatelarInicialIzquierda(?string $edema_polo_suprapatelar_inicial_izquierda): self
    {
        $this->edema_polo_suprapatelar_inicial_izquierda = $edema_polo_suprapatelar_inicial_izquierda;

        return $this;
    }

    public function getEdemaPoloSuprapatelarFinalIzquierda(): ?string
    {
        return $this->edema_polo_suprapatelar_final_izquierda;
    }

    public function setEdemaPoloSuprapatelarFinalIzquierda(?string $edema_polo_suprapatelar_final_izquierda): self
    {
        $this->edema_polo_suprapatelar_final_izquierda = $edema_polo_suprapatelar_final_izquierda;

        return $this;
    }

    public function getEdemaTransarticularRodillaInicialDerecha(): ?string
    {
        return $this->edema_transarticular_rodilla_inicial_derecha;
    }

    public function setEdemaTransarticularRodillaInicialDerecha(?string $edema_transarticular_rodilla_inicial_derecha): self
    {
        $this->edema_transarticular_rodilla_inicial_derecha = $edema_transarticular_rodilla_inicial_derecha;

        return $this;
    }

    public function getEdemaTransarticularRodillaFinalDerecha(): ?string
    {
        return $this->edema_transarticular_rodilla_final_derecha;
    }

    public function setEdemaTransarticularRodillaFinalDerecha(?string $edema_transarticular_rodilla_final_derecha): self
    {
        $this->edema_transarticular_rodilla_final_derecha = $edema_transarticular_rodilla_final_derecha;

        return $this;
    }

    public function getEdemaTransarticularRodillaInicialIzquierda(): ?string
    {
        return $this->edema_transarticular_rodilla_inicial_izquierda;
    }

    public function setEdemaTransarticularRodillaInicialIzquierda(?string $edema_transarticular_rodilla_inicial_izquierda): self
    {
        $this->edema_transarticular_rodilla_inicial_izquierda = $edema_transarticular_rodilla_inicial_izquierda;

        return $this;
    }

    public function getEdemaTransarticularRodillaFinalIzquierda(): ?string
    {
        return $this->edema_transarticular_rodilla_final_izquierda;
    }

    public function setEdemaTransarticularRodillaFinalIzquierda(?string $edema_transarticular_rodilla_final_izquierda): self
    {
        $this->edema_transarticular_rodilla_final_izquierda = $edema_transarticular_rodilla_final_izquierda;

        return $this;
    }

    public function getEdemaPoloInfrapatelarInicialDerecha(): ?string
    {
        return $this->edema_polo_infrapatelar_inicial_derecha;
    }

    public function setEdemaPoloInfrapatelarInicialDerecha(?string $edema_polo_infrapatelar_inicial_derecha): self
    {
        $this->edema_polo_infrapatelar_inicial_derecha = $edema_polo_infrapatelar_inicial_derecha;

        return $this;
    }

    public function getEdemaPoloInfrapatelarFinalDerecha(): ?string
    {
        return $this->edema_polo_infrapatelar_final_derecha;
    }

    public function setEdemaPoloInfrapatelarFinalDerecha(?string $edema_polo_infrapatelar_final_derecha): self
    {
        $this->edema_polo_infrapatelar_final_derecha = $edema_polo_infrapatelar_final_derecha;

        return $this;
    }

    public function getEdemaPoloInfrapatelarInicialIzquierda(): ?string
    {
        return $this->edema_polo_infrapatelar_inicial_izquierda;
    }

    public function setEdemaPoloInfrapatelarInicialIzquierda(?string $edema_polo_infrapatelar_inicial_izquierda): self
    {
        $this->edema_polo_infrapatelar_inicial_izquierda = $edema_polo_infrapatelar_inicial_izquierda;

        return $this;
    }

    public function getEdemaPoloInfrapatelarFinalIzquierda(): ?string
    {
        return $this->edema_polo_infrapatelar_final_izquierda;
    }

    public function setEdemaPoloInfrapatelarFinalIzquierda(?string $edema_polo_infrapatelar_final_izquierda): self
    {
        $this->edema_polo_infrapatelar_final_izquierda = $edema_polo_infrapatelar_final_izquierda;

        return $this;
    }

    public function getTrofismoSuprapatelarInicialDerecha(): ?string
    {
        return $this->trofismo_suprapatelar_inicial_derecha;
    }

    public function setTrofismoSuprapatelarInicialDerecha(?string $trofismo_suprapatelar_inicial_derecha): self
    {
        $this->trofismo_suprapatelar_inicial_derecha = $trofismo_suprapatelar_inicial_derecha;

        return $this;
    }

    public function getTrofismoSuprapatelarFinalDerecha(): ?string
    {
        return $this->trofismo_suprapatelar_final_derecha;
    }

    public function setTrofismoSuprapatelarFinalDerecha(?string $trofismo_suprapatelar_final_derecha): self
    {
        $this->trofismo_suprapatelar_final_derecha = $trofismo_suprapatelar_final_derecha;

        return $this;
    }

    public function getTrofismoSuprapatelarInicialIzquierda(): ?string
    {
        return $this->trofismo_suprapatelar_inicial_izquierda;
    }

    public function setTrofismoSuprapatelarInicialIzquierda(?string $trofismo_suprapatelar_inicial_izquierda): self
    {
        $this->trofismo_suprapatelar_inicial_izquierda = $trofismo_suprapatelar_inicial_izquierda;

        return $this;
    }

    public function getTrofismoSuprapatelarFinalIzquierda(): ?string
    {
        return $this->trofismo_suprapatelar_final_izquierda;
    }

    public function setTrofismoSuprapatelarFinalIzquierda(?string $trofismo_suprapatelar_final_izquierda): self
    {
        $this->trofismo_suprapatelar_final_izquierda = $trofismo_suprapatelar_final_izquierda;

        return $this;
    }

    public function getTrofismoInfrapatelarInicialDerecha(): ?string
    {
        return $this->trofismo_infrapatelar_inicial_derecha;
    }

    public function setTrofismoInfrapatelarInicialDerecha(?string $trofismo_infrapatelar_inicial_derecha): self
    {
        $this->trofismo_infrapatelar_inicial_derecha = $trofismo_infrapatelar_inicial_derecha;

        return $this;
    }

    public function getTrofismoInfrapatelarFinalDerecha(): ?string
    {
        return $this->trofismo_infrapatelar_final_derecha;
    }

    public function setTrofismoInfrapatelarFinalDerecha(?string $trofismo_infrapatelar_final_derecha): self
    {
        $this->trofismo_infrapatelar_final_derecha = $trofismo_infrapatelar_final_derecha;

        return $this;
    }

    public function getTrofismoInfrapatelarInicialIzquierda(): ?string
    {
        return $this->trofismo_infrapatelar_inicial_izquierda;
    }

    public function setTrofismoInfrapatelarInicialIzquierda(?string $trofismo_infrapatelar_inicial_izquierda): self
    {
        $this->trofismo_infrapatelar_inicial_izquierda = $trofismo_infrapatelar_inicial_izquierda;

        return $this;
    }

    public function getTrofismoInfrapatelarFinalIzquierda(): ?string
    {
        return $this->trofismo_infrapatelar_final_izquierda;
    }

    public function setTrofismoInfrapatelarFinalIzquierda(?string $trofismo_infrapatelar_final_izquierda): self
    {
        $this->trofismo_infrapatelar_final_izquierda = $trofismo_infrapatelar_final_izquierda;

        return $this;
    }

    public function getMovRotuNormalInicialDerecha(): ?string
    {
        return $this->mov_rotu_normal_inicial_derecha;
    }

    public function setMovRotuNormalInicialDerecha(?string $mov_rotu_normal_inicial_derecha): self
    {
        $this->mov_rotu_normal_inicial_derecha = $mov_rotu_normal_inicial_derecha;

        return $this;
    }

    public function getMovRotuNormalFinalDerecha(): ?string
    {
        return $this->mov_rotu_normal_final_derecha;
    }

    public function setMovRotuNormalFinalDerecha(?string $mov_rotu_normal_final_derecha): self
    {
        $this->mov_rotu_normal_final_derecha = $mov_rotu_normal_final_derecha;

        return $this;
    }

    public function getMovRotuNormalInicialIzquierda(): ?string
    {
        return $this->mov_rotu_normal_inicial_izquierda;
    }

    public function setMovRotuNormalInicialIzquierda(?string $mov_rotu_normal_inicial_izquierda): self
    {
        $this->mov_rotu_normal_inicial_izquierda = $mov_rotu_normal_inicial_izquierda;

        return $this;
    }

    public function getMovRotuNormalfinalIzquierda(): ?string
    {
        return $this->mov_rotu_normalfinal_izquierda;
    }

    public function setMovRotuNormalfinalIzquierda(?string $mov_rotu_normalfinal_izquierda): self
    {
        $this->mov_rotu_normalfinal_izquierda = $mov_rotu_normalfinal_izquierda;

        return $this;
    }

    public function getMovRotuRigidezInicialDerecha(): ?string
    {
        return $this->mov_rotu_rigidez_inicial_derecha;
    }

    public function setMovRotuRigidezInicialDerecha(?string $mov_rotu_rigidez_inicial_derecha): self
    {
        $this->mov_rotu_rigidez_inicial_derecha = $mov_rotu_rigidez_inicial_derecha;

        return $this;
    }

    public function getMovRotuRigidezFinalDerecha(): ?string
    {
        return $this->mov_rotu_rigidez_final_derecha;
    }

    public function setMovRotuRigidezFinalDerecha(?string $mov_rotu_rigidez_final_derecha): self
    {
        $this->mov_rotu_rigidez_final_derecha = $mov_rotu_rigidez_final_derecha;

        return $this;
    }

    public function getMovRotuRigidezInicialIzquierda(): ?string
    {
        return $this->mov_rotu_rigidez_inicial_izquierda;
    }

    public function setMovRotuRigidezInicialIzquierda(?string $mov_rotu_rigidez_inicial_izquierda): self
    {
        $this->mov_rotu_rigidez_inicial_izquierda = $mov_rotu_rigidez_inicial_izquierda;

        return $this;
    }

    public function getMovRotuRigidezFinalIzquierda(): ?string
    {
        return $this->mov_rotu_rigidez_final_izquierda;
    }

    public function setMovRotuRigidezFinalIzquierda(?string $mov_rotu_rigidez_final_izquierda): self
    {
        $this->mov_rotu_rigidez_final_izquierda = $mov_rotu_rigidez_final_izquierda;

        return $this;
    }

    public function getMovRotuHipermovilInicialDerecha(): ?string
    {
        return $this->mov_rotu_hipermovil_inicial_derecha;
    }

    public function setMovRotuHipermovilInicialDerecha(?string $mov_rotu_hipermovil_inicial_derecha): self
    {
        $this->mov_rotu_hipermovil_inicial_derecha = $mov_rotu_hipermovil_inicial_derecha;

        return $this;
    }

    public function getMovRotuHipermovilFinalDerecha(): ?string
    {
        return $this->mov_rotu_hipermovil_final_derecha;
    }

    public function setMovRotuHipermovilFinalDerecha(?string $mov_rotu_hipermovil_final_derecha): self
    {
        $this->mov_rotu_hipermovil_final_derecha = $mov_rotu_hipermovil_final_derecha;

        return $this;
    }

    public function getMovRotuHipermovilInicialIzquierda(): ?string
    {
        return $this->mov_rotu_hipermovil_inicial_izquierda;
    }

    public function setMovRotuHipermovilInicialIzquierda(?string $mov_rotu_hipermovil_inicial_izquierda): self
    {
        $this->mov_rotu_hipermovil_inicial_izquierda = $mov_rotu_hipermovil_inicial_izquierda;

        return $this;
    }

    public function getMovRotuHipermovilFinalIzquierda(): ?string
    {
        return $this->mov_rotu_hipermovil_final_izquierda;
    }

    public function setMovRotuHipermovilFinalIzquierda(?string $mov_rotu_hipermovil_final_izquierda): self
    {
        $this->mov_rotu_hipermovil_final_izquierda = $mov_rotu_hipermovil_final_izquierda;

        return $this;
    }

    public function getMovRotuHipomovilInicialDerecha(): ?string
    {
        return $this->mov_rotu_hipomovil_inicial_derecha;
    }

    public function setMovRotuHipomovilInicialDerecha(?string $mov_rotu_hipomovil_inicial_derecha): self
    {
        $this->mov_rotu_hipomovil_inicial_derecha = $mov_rotu_hipomovil_inicial_derecha;

        return $this;
    }

    public function getMovRotuHipomovilFinalDerecha(): ?string
    {
        return $this->mov_rotu_hipomovil_final_derecha;
    }

    public function setMovRotuHipomovilFinalDerecha(?string $mov_rotu_hipomovil_final_derecha): self
    {
        $this->mov_rotu_hipomovil_final_derecha = $mov_rotu_hipomovil_final_derecha;

        return $this;
    }

    public function getMovRotuHipomovilInicialIzquierda(): ?string
    {
        return $this->mov_rotu_hipomovil_inicial_izquierda;
    }

    public function setMovRotuHipomovilInicialIzquierda(?string $mov_rotu_hipomovil_inicial_izquierda): self
    {
        $this->mov_rotu_hipomovil_inicial_izquierda = $mov_rotu_hipomovil_inicial_izquierda;

        return $this;
    }

    public function getMovRotuHipomovilFinalIzquierda(): ?string
    {
        return $this->mov_rotu_hipomovil_final_izquierda;
    }

    public function setMovRotuHipomovilFinalIzquierda(?string $mov_rotu_hipomovil_final_izquierda): self
    {
        $this->mov_rotu_hipomovil_final_izquierda = $mov_rotu_hipomovil_final_izquierda;

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

    public function getFuerMuscCuadricepsInicialDerecha(): ?string
    {
        return $this->fuer_musc_cuadriceps_inicial_derecha;
    }

    public function setFuerMuscCuadricepsInicialDerecha(?string $fuer_musc_cuadriceps_inicial_derecha): self
    {
        $this->fuer_musc_cuadriceps_inicial_derecha = $fuer_musc_cuadriceps_inicial_derecha;

        return $this;
    }

    public function getFuerMuscCuadricepsFinalDerecha(): ?string
    {
        return $this->fuer_musc_cuadriceps_final_derecha;
    }

    public function setFuerMuscCuadricepsFinalDerecha(?string $fuer_musc_cuadriceps_final_derecha): self
    {
        $this->fuer_musc_cuadriceps_final_derecha = $fuer_musc_cuadriceps_final_derecha;

        return $this;
    }

    public function getFuerMuscCuadricepsInicialIzquierda(): ?string
    {
        return $this->fuer_musc_cuadriceps_inicial_izquierda;
    }

    public function setFuerMuscCuadricepsInicialIzquierda(?string $fuer_musc_cuadriceps_inicial_izquierda): self
    {
        $this->fuer_musc_cuadriceps_inicial_izquierda = $fuer_musc_cuadriceps_inicial_izquierda;

        return $this;
    }

    public function getFuerMuscCuadricepsFinalIzquierda(): ?string
    {
        return $this->fuer_musc_cuadriceps_final_izquierda;
    }

    public function setFuerMuscCuadricepsFinalIzquierda(?string $fuer_musc_cuadriceps_final_izquierda): self
    {
        $this->fuer_musc_cuadriceps_final_izquierda = $fuer_musc_cuadriceps_final_izquierda;

        return $this;
    }

    public function getFuerMuscIsquiotibialesInicialDerecha(): ?string
    {
        return $this->fuer_musc_isquiotibiales_inicial_derecha;
    }

    public function setFuerMuscIsquiotibialesInicialDerecha(?string $fuer_musc_isquiotibiales_inicial_derecha): self
    {
        $this->fuer_musc_isquiotibiales_inicial_derecha = $fuer_musc_isquiotibiales_inicial_derecha;

        return $this;
    }

    public function getFuerMuscIsquiotibialesFinalDerecha(): ?string
    {
        return $this->fuer_musc_isquiotibiales_final_derecha;
    }

    public function setFuerMuscIsquiotibialesFinalDerecha(?string $fuer_musc_isquiotibiales_final_derecha): self
    {
        $this->fuer_musc_isquiotibiales_final_derecha = $fuer_musc_isquiotibiales_final_derecha;

        return $this;
    }

    public function getFuerMuscIsquiotibialesInicialIzquierda(): ?string
    {
        return $this->fuer_musc_isquiotibiales_inicial_izquierda;
    }

    public function setFuerMuscIsquiotibialesInicialIzquierda(?string $fuer_musc_isquiotibiales_inicial_izquierda): self
    {
        $this->fuer_musc_isquiotibiales_inicial_izquierda = $fuer_musc_isquiotibiales_inicial_izquierda;

        return $this;
    }

    public function getFuerMuscIsquiotibialesFinalIzquierda(): ?string
    {
        return $this->fuer_musc_isquiotibiales_final_izquierda;
    }

    public function setFuerMuscIsquiotibialesFinalIzquierda(?string $fuer_musc_isquiotibiales_final_izquierda): self
    {
        $this->fuer_musc_isquiotibiales_final_izquierda = $fuer_musc_isquiotibiales_final_izquierda;

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

    public function getFlexibilidadTestElyInicialDerecha(): ?string
    {
        return $this->flexibilidad_test_ely_inicial_derecha;
    }

    public function setFlexibilidadTestElyInicialDerecha(?string $flexibilidad_test_ely_inicial_derecha): self
    {
        $this->flexibilidad_test_ely_inicial_derecha = $flexibilidad_test_ely_inicial_derecha;

        return $this;
    }

    public function getFlexibilidadTestElyFinalDerecha(): ?string
    {
        return $this->flexibilidad_test_ely_final_derecha;
    }

    public function setFlexibilidadTestElyFinalDerecha(?string $flexibilidad_test_ely_final_derecha): self
    {
        $this->flexibilidad_test_ely_final_derecha = $flexibilidad_test_ely_final_derecha;

        return $this;
    }

    public function getFlexibilidadTestElyInicialIzquierda(): ?string
    {
        return $this->flexibilidad_test_ely_inicial_izquierda;
    }

    public function setFlexibilidadTestElyInicialIzquierda(?string $flexibilidad_test_ely_inicial_izquierda): self
    {
        $this->flexibilidad_test_ely_inicial_izquierda = $flexibilidad_test_ely_inicial_izquierda;

        return $this;
    }

    public function getFlexibilidadTestElyFinalIzquierda(): ?string
    {
        return $this->flexibilidad_test_ely_final_izquierda;
    }

    public function setFlexibilidadTestElyFinalIzquierda(?string $flexibilidad_test_ely_final_izquierda): self
    {
        $this->flexibilidad_test_ely_final_izquierda = $flexibilidad_test_ely_final_izquierda;

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

    public function getFlexibilidadIsquiotibialesInicialDerecha(): ?string
    {
        return $this->flexibilidad_isquiotibiales_inicial_derecha;
    }

    public function setFlexibilidadIsquiotibialesInicialDerecha(?string $flexibilidad_isquiotibiales_inicial_derecha): self
    {
        $this->flexibilidad_isquiotibiales_inicial_derecha = $flexibilidad_isquiotibiales_inicial_derecha;

        return $this;
    }

    public function getFlexibilidadIsquiotibialesFinialDerecha(): ?string
    {
        return $this->flexibilidad_isquiotibiales_finial_derecha;
    }

    public function setFlexibilidadIsquiotibialesFinialDerecha(?string $flexibilidad_isquiotibiales_finial_derecha): self
    {
        $this->flexibilidad_isquiotibiales_finial_derecha = $flexibilidad_isquiotibiales_finial_derecha;

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

    public function getPrueEspeLachmanInicialDerecha(): ?string
    {
        return $this->prue_espe_lachman_inicial_derecha;
    }

    public function setPrueEspeLachmanInicialDerecha(?string $prue_espe_lachman_inicial_derecha): self
    {
        $this->prue_espe_lachman_inicial_derecha = $prue_espe_lachman_inicial_derecha;

        return $this;
    }

    public function getPrueEspeLachmanFinalDerecha(): ?string
    {
        return $this->prue_espe_lachman_final_derecha;
    }

    public function setPrueEspeLachmanFinalDerecha(?string $prue_espe_lachman_final_derecha): self
    {
        $this->prue_espe_lachman_final_derecha = $prue_espe_lachman_final_derecha;

        return $this;
    }

    public function getPrueEspeLachmanInicialIzquierda(): ?string
    {
        return $this->prue_espe_lachman_inicial_izquierda;
    }

    public function setPrueEspeLachmanInicialIzquierda(?string $prue_espe_lachman_inicial_izquierda): self
    {
        $this->prue_espe_lachman_inicial_izquierda = $prue_espe_lachman_inicial_izquierda;

        return $this;
    }

    public function getPrueEspeLachmanFinalIzquierda(): ?string
    {
        return $this->prue_espe_lachman_final_izquierda;
    }

    public function setPrueEspeLachmanFinalIzquierda(?string $prue_espe_lachman_final_izquierda): self
    {
        $this->prue_espe_lachman_final_izquierda = $prue_espe_lachman_final_izquierda;

        return $this;
    }

    public function getPrueEspeTestValgoInicialDerecha(): ?string
    {
        return $this->prue_espe_test_valgo_inicial_derecha;
    }

    public function setPrueEspeTestValgoInicialDerecha(?string $prue_espe_test_valgo_inicial_derecha): self
    {
        $this->prue_espe_test_valgo_inicial_derecha = $prue_espe_test_valgo_inicial_derecha;

        return $this;
    }

    public function getPrueEspeTestValgoFinaalDerecha(): ?string
    {
        return $this->prue_espe_test_valgo_finaal_derecha;
    }

    public function setPrueEspeTestValgoFinaalDerecha(?string $prue_espe_test_valgo_finaal_derecha): self
    {
        $this->prue_espe_test_valgo_finaal_derecha = $prue_espe_test_valgo_finaal_derecha;

        return $this;
    }

    public function getPrueEspeTestValgoInicialIzquierda(): ?string
    {
        return $this->prue_espe_test_valgo_inicial_izquierda;
    }

    public function setPrueEspeTestValgoInicialIzquierda(?string $prue_espe_test_valgo_inicial_izquierda): self
    {
        $this->prue_espe_test_valgo_inicial_izquierda = $prue_espe_test_valgo_inicial_izquierda;

        return $this;
    }

    public function getPrueEspeTestValgoFinalIzquierda(): ?string
    {
        return $this->prue_espe_test_valgo_final_izquierda;
    }

    public function setPrueEspeTestValgoFinalIzquierda(?string $prue_espe_test_valgo_final_izquierda): self
    {
        $this->prue_espe_test_valgo_final_izquierda = $prue_espe_test_valgo_final_izquierda;

        return $this;
    }

    public function getPrueEspeTestVaroInicialDerecha(): ?string
    {
        return $this->prue_espe_test_varo_inicial_derecha;
    }

    public function setPrueEspeTestVaroInicialDerecha(?string $prue_espe_test_varo_inicial_derecha): self
    {
        $this->prue_espe_test_varo_inicial_derecha = $prue_espe_test_varo_inicial_derecha;

        return $this;
    }

    public function getPrueEspeTestVaroFinalDerecha(): ?string
    {
        return $this->prue_espe_test_varo_final_derecha;
    }

    public function setPrueEspeTestVaroFinalDerecha(?string $prue_espe_test_varo_final_derecha): self
    {
        $this->prue_espe_test_varo_final_derecha = $prue_espe_test_varo_final_derecha;

        return $this;
    }

    public function getPrueEspeTestVaroInicialIzquierda(): ?string
    {
        return $this->prue_espe_test_varo_inicial_izquierda;
    }

    public function setPrueEspeTestVaroInicialIzquierda(?string $prue_espe_test_varo_inicial_izquierda): self
    {
        $this->prue_espe_test_varo_inicial_izquierda = $prue_espe_test_varo_inicial_izquierda;

        return $this;
    }

    public function getPrueEspeTestVaroFinalIzquierda(): ?string
    {
        return $this->prue_espe_test_varo_final_izquierda;
    }

    public function setPrueEspeTestVaroFinalIzquierda(?string $prue_espe_test_varo_final_izquierda): self
    {
        $this->prue_espe_test_varo_final_izquierda = $prue_espe_test_varo_final_izquierda;

        return $this;
    }

    public function getPrueEspeCajonAnteriorInicialDerecha(): ?string
    {
        return $this->prue_espe_cajon_anterior_inicial_derecha;
    }

    public function setPrueEspeCajonAnteriorInicialDerecha(?string $prue_espe_cajon_anterior_inicial_derecha): self
    {
        $this->prue_espe_cajon_anterior_inicial_derecha = $prue_espe_cajon_anterior_inicial_derecha;

        return $this;
    }

    public function getPrueEspeCajonAnteriorFinalDerecha(): ?string
    {
        return $this->prue_espe_cajon_anterior_final_derecha;
    }

    public function setPrueEspeCajonAnteriorFinalDerecha(?string $prue_espe_cajon_anterior_final_derecha): self
    {
        $this->prue_espe_cajon_anterior_final_derecha = $prue_espe_cajon_anterior_final_derecha;

        return $this;
    }

    public function getPrueEspeCajonAnteriorInicialIzquierda(): ?string
    {
        return $this->prue_espe_cajon_anterior_inicial_izquierda;
    }

    public function setPrueEspeCajonAnteriorInicialIzquierda(?string $prue_espe_cajon_anterior_inicial_izquierda): self
    {
        $this->prue_espe_cajon_anterior_inicial_izquierda = $prue_espe_cajon_anterior_inicial_izquierda;

        return $this;
    }

    public function getPrueEspeCajonAnteriorFinalIzquierda(): ?string
    {
        return $this->prue_espe_cajon_anterior_final_izquierda;
    }

    public function setPrueEspeCajonAnteriorFinalIzquierda(?string $prue_espe_cajon_anterior_final_izquierda): self
    {
        $this->prue_espe_cajon_anterior_final_izquierda = $prue_espe_cajon_anterior_final_izquierda;

        return $this;
    }

    public function getPrueEspeCajonPosteriorInicialDerecha(): ?string
    {
        return $this->prue_espe_cajon_posterior_inicial_derecha;
    }

    public function setPrueEspeCajonPosteriorInicialDerecha(?string $prue_espe_cajon_posterior_inicial_derecha): self
    {
        $this->prue_espe_cajon_posterior_inicial_derecha = $prue_espe_cajon_posterior_inicial_derecha;

        return $this;
    }

    public function getPrueEspeCajonPosteriorFinalDerecha(): ?string
    {
        return $this->prue_espe_cajon_posterior_final_derecha;
    }

    public function setPrueEspeCajonPosteriorFinalDerecha(?string $prue_espe_cajon_posterior_final_derecha): self
    {
        $this->prue_espe_cajon_posterior_final_derecha = $prue_espe_cajon_posterior_final_derecha;

        return $this;
    }

    public function getPrueEspeCajonPosteriorInicialIzquierda(): ?string
    {
        return $this->prue_espe_cajon_posterior_inicial_izquierda;
    }

    public function setPrueEspeCajonPosteriorInicialIzquierda(?string $prue_espe_cajon_posterior_inicial_izquierda): self
    {
        $this->prue_espe_cajon_posterior_inicial_izquierda = $prue_espe_cajon_posterior_inicial_izquierda;

        return $this;
    }

    public function getPrueEspeCajonPosteriorFinalIzquierda(): ?string
    {
        return $this->prue_espe_cajon_posterior_final_izquierda;
    }

    public function setPrueEspeCajonPosteriorFinalIzquierda(?string $prue_espe_cajon_posterior_final_izquierda): self
    {
        $this->prue_espe_cajon_posterior_final_izquierda = $prue_espe_cajon_posterior_final_izquierda;

        return $this;
    }

    public function getPrueEspeAppleyInicialDerecha(): ?string
    {
        return $this->prue_espe_appley_inicial_derecha;
    }

    public function setPrueEspeAppleyInicialDerecha(?string $prue_espe_appley_inicial_derecha): self
    {
        $this->prue_espe_appley_inicial_derecha = $prue_espe_appley_inicial_derecha;

        return $this;
    }

    public function getPrueEspeAppleyFinalDerecha(): ?string
    {
        return $this->prue_espe_appley_final_derecha;
    }

    public function setPrueEspeAppleyFinalDerecha(?string $prue_espe_appley_final_derecha): self
    {
        $this->prue_espe_appley_final_derecha = $prue_espe_appley_final_derecha;

        return $this;
    }

    public function getPrueEspeAppleyInicialIzquierda(): ?string
    {
        return $this->prue_espe_appley_inicial_izquierda;
    }

    public function setPrueEspeAppleyInicialIzquierda(?string $prue_espe_appley_inicial_izquierda): self
    {
        $this->prue_espe_appley_inicial_izquierda = $prue_espe_appley_inicial_izquierda;

        return $this;
    }

    public function getPrueEspeAppleyFinalIzquierda(): ?string
    {
        return $this->prue_espe_appley_final_izquierda;
    }

    public function setPrueEspeAppleyFinalIzquierda(?string $prue_espe_appley_final_izquierda): self
    {
        $this->prue_espe_appley_final_izquierda = $prue_espe_appley_final_izquierda;

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

    public function getTratamientoUltrasonido(): ?bool
    {
        return $this->tratamiento_ultrasonido;
    }

    public function setTratamientoUltrasonido(?bool $tratamiento_ultrasonido): self
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

    public function getTratamientoHidroterapia(): ?string
    {
        return $this->tratamiento_hidroterapia;
    }

    public function setTratamientoHidroterapia(?string $tratamiento_hidroterapia): self
    {
        $this->tratamiento_hidroterapia = $tratamiento_hidroterapia;

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

    public function getTecnFaciKabbat(): ?bool
    {
        return $this->tecn_faci_kabbat;
    }

    public function setTecnFaciKabbat(?bool $tecn_faci_kabbat): self
    {
        $this->tecn_faci_kabbat = $tecn_faci_kabbat;

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

    public function getRehaPropTalones(): ?string
    {
        return $this->reha_prop_talones;
    }

    public function setRehaPropTalones(?string $reha_prop_talones): self
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
