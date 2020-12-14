<?php

namespace App\Entity;

use App\Repository\ValoracionCodoRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ValoracionCodoRepository::class)
 */
class ValoracionCodo
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
    private $edema_normal_inicial_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $edema_normal_final_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $edema_normal_inicial_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $edema_normal_final_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $edema_grado_1_inicial_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $edema_grado_1_final_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $edema_grado_1_inicial_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $edema_grado_1_final_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $edema_grado_2_inicial_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $edema_grado_2_final_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $edema_grado_2_inicial_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $edema_grado_2_final_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $trofismo_14_encima_oleocranon_inicial_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $trofismo_14_encima_oleocranon_final_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $trofismo_14_encima_oleocranon_inicial_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $trofismo_14_encima_oleocranon_final_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $trofismo_10_debajo_oleocranon_inicial_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $trofismo_10_debajo_oleocranon_final_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $trofismo_10_debajo_oleocranon_inicial_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $trofismo_10_debajo_oleocranon_final_izquierda;

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
    private $mov_arti_abduccion_inicial_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $mov_arti_abduccion_final_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $mov_arti_abduccion_inicial_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $mov_arti_abduccion_final_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $mov_arti_pronacion_inicial_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $mov_arti_pronacion_final_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $mov_arti_pronacion_inicial_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $mov_arti_pronacion_final_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $mov_arti_supinacion_inicial_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $mov_arti_supinacion_final_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $mov_arti_supinacion_inicial_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $mov_arti_supinacion_final_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $fuer_musc_biceps_inicial_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $fuer_musc_biceps_final_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $fuer_musc_biceps_inicial_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $fuer_musc_biceps_final_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $fuer_musc_triceps_inicial_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $fuer_musc_triceps_final_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $fuer_musc_triceps_inicial_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $fuer_musc_triceps_final_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $fuer_musc_braquial_anterior_inicial_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $fuer_musc_braquial_anterior_final_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $fuer_musc_braquial_anterior_inicial_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $fuer_musc_braquial_anterior_final_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $fuer_musc_supinador_largo_inicial_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $fuer_musc_supinador_largo_final_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $fuer_musc_supinador_largo_inicial_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $fuer_musc_supinador_largo_final_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $fuer_musc_supinador_corto_inicial_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $fuer_musc_supinador_corto_final_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $fuer_musc_supinador_corto_inicial_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $fuer_musc_supinador_corto_final_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $fuer_musc_pronadores_inicial_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $fuer_musc_pronadores_final_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $fuer_musc_pronadores_inicial_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $fuer_musc_pronadores_final_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $flexibilidad_hombro_inicial_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $flexibilidad_hombro_final_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $flexibilidad_hombro_inicial_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $flexibilidad_hombro_final_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $flexibilidad_biceps_inicial_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $flexibilidad_biceps_final_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $flexibilidad_biceps_inicial_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $flexibilidad_biceps_final_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $flexibilidad_triceps_inicial_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $flexibilidad_triceps_final_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $flexibilidad_triceps_inicial_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $flexibilidad_triceps_final_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $prue_espe_maudsley_inicial_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $prue_espe_maudsley_final_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $prue_espe_maudsley_inicial_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $prue_espe_maudsley_final_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $prue_espe_test_mill_inicial_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $prue_espe_test_mill_final_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $prue_espe_test_mill_inicial_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $prue_espe_test_mill_final_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $prue_espe_hiperflexion_muneca_inicial_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $prue_espe_hiperflexion_muneca_final_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $prue_espe_hiperflexion_muneca_inicial_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $prue_espe_hiperflexion_muneca_final_izquierda;

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
    private $tratamiento_estimulacion;

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
    private $tecn_facil_kabbat;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $otras_kester;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $otras_odonobieu;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $otras_cadena_cinetica;

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
    private $ejercicios_isocineticos;

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
    private $aparatos_plastilina;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $aparatos_multifuerza;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $aditamentos_cabestrillo;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $aditamentos_tipo_avion;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $aditamentos_ferula;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $aditamentos_otros;

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

    public function getEdemaNormalInicialDerecha(): ?string
    {
        return $this->edema_normal_inicial_derecha;
    }

    public function setEdemaNormalInicialDerecha(?string $edema_normal_inicial_derecha): self
    {
        $this->edema_normal_inicial_derecha = $edema_normal_inicial_derecha;

        return $this;
    }

    public function getEdemaNormalFinalDerecha(): ?string
    {
        return $this->edema_normal_final_derecha;
    }

    public function setEdemaNormalFinalDerecha(?string $edema_normal_final_derecha): self
    {
        $this->edema_normal_final_derecha = $edema_normal_final_derecha;

        return $this;
    }

    public function getEdemaNormalInicialIzquierda(): ?string
    {
        return $this->edema_normal_inicial_izquierda;
    }

    public function setEdemaNormalInicialIzquierda(?string $edema_normal_inicial_izquierda): self
    {
        $this->edema_normal_inicial_izquierda = $edema_normal_inicial_izquierda;

        return $this;
    }

    public function getEdemaNormalFinalIzquierda(): ?string
    {
        return $this->edema_normal_final_izquierda;
    }

    public function setEdemaNormalFinalIzquierda(?string $edema_normal_final_izquierda): self
    {
        $this->edema_normal_final_izquierda = $edema_normal_final_izquierda;

        return $this;
    }

    public function getEdemaGrado1InicialDerecha(): ?string
    {
        return $this->edema_grado_1_inicial_derecha;
    }

    public function setEdemaGrado1InicialDerecha(?string $edema_grado_1_inicial_derecha): self
    {
        $this->edema_grado_1_inicial_derecha = $edema_grado_1_inicial_derecha;

        return $this;
    }

    public function getEdemaGrado1FinalDerecha(): ?string
    {
        return $this->edema_grado_1_final_derecha;
    }

    public function setEdemaGrado1FinalDerecha(?string $edema_grado_1_final_derecha): self
    {
        $this->edema_grado_1_final_derecha = $edema_grado_1_final_derecha;

        return $this;
    }

    public function getEdemaGrado1InicialIzquierda(): ?string
    {
        return $this->edema_grado_1_inicial_izquierda;
    }

    public function setEdemaGrado1InicialIzquierda(?string $edema_grado_1_inicial_izquierda): self
    {
        $this->edema_grado_1_inicial_izquierda = $edema_grado_1_inicial_izquierda;

        return $this;
    }

    public function getEdemaGrado1FinalIzquierda(): ?string
    {
        return $this->edema_grado_1_final_izquierda;
    }

    public function setEdemaGrado1FinalIzquierda(?string $edema_grado_1_final_izquierda): self
    {
        $this->edema_grado_1_final_izquierda = $edema_grado_1_final_izquierda;

        return $this;
    }

    public function getEdemaGrado2InicialDerecha(): ?string
    {
        return $this->edema_grado_2_inicial_derecha;
    }

    public function setEdemaGrado2InicialDerecha(?string $edema_grado_2_inicial_derecha): self
    {
        $this->edema_grado_2_inicial_derecha = $edema_grado_2_inicial_derecha;

        return $this;
    }

    public function getEdemaGrado2FinalDerecha(): ?string
    {
        return $this->edema_grado_2_final_derecha;
    }

    public function setEdemaGrado2FinalDerecha(?string $edema_grado_2_final_derecha): self
    {
        $this->edema_grado_2_final_derecha = $edema_grado_2_final_derecha;

        return $this;
    }

    public function getEdemaGrado2InicialIzquierda(): ?string
    {
        return $this->edema_grado_2_inicial_izquierda;
    }

    public function setEdemaGrado2InicialIzquierda(?string $edema_grado_2_inicial_izquierda): self
    {
        $this->edema_grado_2_inicial_izquierda = $edema_grado_2_inicial_izquierda;

        return $this;
    }

    public function getEdemaGrado2FinalIzquierda(): ?string
    {
        return $this->edema_grado_2_final_izquierda;
    }

    public function setEdemaGrado2FinalIzquierda(?string $edema_grado_2_final_izquierda): self
    {
        $this->edema_grado_2_final_izquierda = $edema_grado_2_final_izquierda;

        return $this;
    }

    public function getTrofismo14EncimaOleocranonInicialDerecha(): ?string
    {
        return $this->trofismo_14_encima_oleocranon_inicial_derecha;
    }

    public function setTrofismo14EncimaOleocranonInicialDerecha(?string $trofismo_14_encima_oleocranon_inicial_derecha): self
    {
        $this->trofismo_14_encima_oleocranon_inicial_derecha = $trofismo_14_encima_oleocranon_inicial_derecha;

        return $this;
    }

    public function getTrofismo14EncimaOleocranonFinalDerecha(): ?string
    {
        return $this->trofismo_14_encima_oleocranon_final_derecha;
    }

    public function setTrofismo14EncimaOleocranonFinalDerecha(?string $trofismo_14_encima_oleocranon_final_derecha): self
    {
        $this->trofismo_14_encima_oleocranon_final_derecha = $trofismo_14_encima_oleocranon_final_derecha;

        return $this;
    }

    public function getTrofismo14EncimaOleocranonInicialIzquierda(): ?string
    {
        return $this->trofismo_14_encima_oleocranon_inicial_izquierda;
    }

    public function setTrofismo14EncimaOleocranonInicialIzquierda(?string $trofismo_14_encima_oleocranon_inicial_izquierda): self
    {
        $this->trofismo_14_encima_oleocranon_inicial_izquierda = $trofismo_14_encima_oleocranon_inicial_izquierda;

        return $this;
    }

    public function getTrofismo14EncimaOleocranonFinalIzquierda(): ?string
    {
        return $this->trofismo_14_encima_oleocranon_final_izquierda;
    }

    public function setTrofismo14EncimaOleocranonFinalIzquierda(?string $trofismo_14_encima_oleocranon_final_izquierda): self
    {
        $this->trofismo_14_encima_oleocranon_final_izquierda = $trofismo_14_encima_oleocranon_final_izquierda;

        return $this;
    }

    public function getTrofismo10DebajoOleocranonInicialDerecha(): ?string
    {
        return $this->trofismo_10_debajo_oleocranon_inicial_derecha;
    }

    public function setTrofismo10DebajoOleocranonInicialDerecha(?string $trofismo_10_debajo_oleocranon_inicial_derecha): self
    {
        $this->trofismo_10_debajo_oleocranon_inicial_derecha = $trofismo_10_debajo_oleocranon_inicial_derecha;

        return $this;
    }

    public function getTrofismo10DebajoOleocranonFinalDerecha(): ?string
    {
        return $this->trofismo_10_debajo_oleocranon_final_derecha;
    }

    public function setTrofismo10DebajoOleocranonFinalDerecha(?string $trofismo_10_debajo_oleocranon_final_derecha): self
    {
        $this->trofismo_10_debajo_oleocranon_final_derecha = $trofismo_10_debajo_oleocranon_final_derecha;

        return $this;
    }

    public function getTrofismo10DebajoOleocranonInicialIzquierda(): ?string
    {
        return $this->trofismo_10_debajo_oleocranon_inicial_izquierda;
    }

    public function setTrofismo10DebajoOleocranonInicialIzquierda(?string $trofismo_10_debajo_oleocranon_inicial_izquierda): self
    {
        $this->trofismo_10_debajo_oleocranon_inicial_izquierda = $trofismo_10_debajo_oleocranon_inicial_izquierda;

        return $this;
    }

    public function getTrofismo10DebajoOleocranonFinalIzquierda(): ?string
    {
        return $this->trofismo_10_debajo_oleocranon_final_izquierda;
    }

    public function setTrofismo10DebajoOleocranonFinalIzquierda(?string $trofismo_10_debajo_oleocranon_final_izquierda): self
    {
        $this->trofismo_10_debajo_oleocranon_final_izquierda = $trofismo_10_debajo_oleocranon_final_izquierda;

        return $this;
    }

    public function getMovArtiFlexionInicialDerecha(): ?string
    {
        return $this->mov_arti_flexion_inicial_derecha;
    }

    public function setMovArtiFlexionInicialDerecha(string $mov_arti_flexion_inicial_derecha): self
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

    public function getMovArtiAbduccionInicialDerecha(): ?string
    {
        return $this->mov_arti_abduccion_inicial_derecha;
    }

    public function setMovArtiAbduccionInicialDerecha(?string $mov_arti_abduccion_inicial_derecha): self
    {
        $this->mov_arti_abduccion_inicial_derecha = $mov_arti_abduccion_inicial_derecha;

        return $this;
    }

    public function getMovArtiAbduccionFinalDerecha(): ?string
    {
        return $this->mov_arti_abduccion_final_derecha;
    }

    public function setMovArtiAbduccionFinalDerecha(?string $mov_arti_abduccion_final_derecha): self
    {
        $this->mov_arti_abduccion_final_derecha = $mov_arti_abduccion_final_derecha;

        return $this;
    }

    public function getMovArtiAbduccionInicialIzquierda(): ?string
    {
        return $this->mov_arti_abduccion_inicial_izquierda;
    }

    public function setMovArtiAbduccionInicialIzquierda(?string $mov_arti_abduccion_inicial_izquierda): self
    {
        $this->mov_arti_abduccion_inicial_izquierda = $mov_arti_abduccion_inicial_izquierda;

        return $this;
    }

    public function getMovArtiAbduccionFinalIzquierda(): ?string
    {
        return $this->mov_arti_abduccion_final_izquierda;
    }

    public function setMovArtiAbduccionFinalIzquierda(?string $mov_arti_abduccion_final_izquierda): self
    {
        $this->mov_arti_abduccion_final_izquierda = $mov_arti_abduccion_final_izquierda;

        return $this;
    }

    public function getMovArtiPronacionInicialDerecha(): ?string
    {
        return $this->mov_arti_pronacion_inicial_derecha;
    }

    public function setMovArtiPronacionInicialDerecha(?string $mov_arti_pronacion_inicial_derecha): self
    {
        $this->mov_arti_pronacion_inicial_derecha = $mov_arti_pronacion_inicial_derecha;

        return $this;
    }

    public function getMovArtiPronacionFinalDerecha(): ?string
    {
        return $this->mov_arti_pronacion_final_derecha;
    }

    public function setMovArtiPronacionFinalDerecha(?string $mov_arti_pronacion_final_derecha): self
    {
        $this->mov_arti_pronacion_final_derecha = $mov_arti_pronacion_final_derecha;

        return $this;
    }

    public function getMovArtiPronacionInicialIzquierda(): ?string
    {
        return $this->mov_arti_pronacion_inicial_izquierda;
    }

    public function setMovArtiPronacionInicialIzquierda(?string $mov_arti_pronacion_inicial_izquierda): self
    {
        $this->mov_arti_pronacion_inicial_izquierda = $mov_arti_pronacion_inicial_izquierda;

        return $this;
    }

    public function getMovArtiPronacionFinalIzquierda(): ?string
    {
        return $this->mov_arti_pronacion_final_izquierda;
    }

    public function setMovArtiPronacionFinalIzquierda(?string $mov_arti_pronacion_final_izquierda): self
    {
        $this->mov_arti_pronacion_final_izquierda = $mov_arti_pronacion_final_izquierda;

        return $this;
    }

    public function getMovArtiSupinacionInicialDerecha(): ?string
    {
        return $this->mov_arti_supinacion_inicial_derecha;
    }

    public function setMovArtiSupinacionInicialDerecha(?string $mov_arti_supinacion_inicial_derecha): self
    {
        $this->mov_arti_supinacion_inicial_derecha = $mov_arti_supinacion_inicial_derecha;

        return $this;
    }

    public function getMovArtiSupinacionFinalDerecha(): ?string
    {
        return $this->mov_arti_supinacion_final_derecha;
    }

    public function setMovArtiSupinacionFinalDerecha(?string $mov_arti_supinacion_final_derecha): self
    {
        $this->mov_arti_supinacion_final_derecha = $mov_arti_supinacion_final_derecha;

        return $this;
    }

    public function getMovArtiSupinacionInicialIzquierda(): ?string
    {
        return $this->mov_arti_supinacion_inicial_izquierda;
    }

    public function setMovArtiSupinacionInicialIzquierda(?string $mov_arti_supinacion_inicial_izquierda): self
    {
        $this->mov_arti_supinacion_inicial_izquierda = $mov_arti_supinacion_inicial_izquierda;

        return $this;
    }

    public function getMovArtiSupinacionFinalIzquierda(): ?string
    {
        return $this->mov_arti_supinacion_final_izquierda;
    }

    public function setMovArtiSupinacionFinalIzquierda(?string $mov_arti_supinacion_final_izquierda): self
    {
        $this->mov_arti_supinacion_final_izquierda = $mov_arti_supinacion_final_izquierda;

        return $this;
    }

    public function getFuerMuscBicepsInicialDerecha(): ?string
    {
        return $this->fuer_musc_biceps_inicial_derecha;
    }

    public function setFuerMuscBicepsInicialDerecha(?string $fuer_musc_biceps_inicial_derecha): self
    {
        $this->fuer_musc_biceps_inicial_derecha = $fuer_musc_biceps_inicial_derecha;

        return $this;
    }

    public function getFuerMuscBicepsFinalDerecha(): ?string
    {
        return $this->fuer_musc_biceps_final_derecha;
    }

    public function setFuerMuscBicepsFinalDerecha(?string $fuer_musc_biceps_final_derecha): self
    {
        $this->fuer_musc_biceps_final_derecha = $fuer_musc_biceps_final_derecha;

        return $this;
    }

    public function getFuerMuscBicepsInicialIzquierda(): ?string
    {
        return $this->fuer_musc_biceps_inicial_izquierda;
    }

    public function setFuerMuscBicepsInicialIzquierda(?string $fuer_musc_biceps_inicial_izquierda): self
    {
        $this->fuer_musc_biceps_inicial_izquierda = $fuer_musc_biceps_inicial_izquierda;

        return $this;
    }

    public function getFuerMuscBicepsFinalIzquierda(): ?string
    {
        return $this->fuer_musc_biceps_final_izquierda;
    }

    public function setFuerMuscBicepsFinalIzquierda(?string $fuer_musc_biceps_final_izquierda): self
    {
        $this->fuer_musc_biceps_final_izquierda = $fuer_musc_biceps_final_izquierda;

        return $this;
    }

    public function getFuerMuscTricepsInicialDerecha(): ?string
    {
        return $this->fuer_musc_triceps_inicial_derecha;
    }

    public function setFuerMuscTricepsInicialDerecha(?string $fuer_musc_triceps_inicial_derecha): self
    {
        $this->fuer_musc_triceps_inicial_derecha = $fuer_musc_triceps_inicial_derecha;

        return $this;
    }

    public function getFuerMuscTricepsFinalDerecha(): ?string
    {
        return $this->fuer_musc_triceps_final_derecha;
    }

    public function setFuerMuscTricepsFinalDerecha(?string $fuer_musc_triceps_final_derecha): self
    {
        $this->fuer_musc_triceps_final_derecha = $fuer_musc_triceps_final_derecha;

        return $this;
    }

    public function getFuerMuscTricepsInicialIzquierda(): ?string
    {
        return $this->fuer_musc_triceps_inicial_izquierda;
    }

    public function setFuerMuscTricepsInicialIzquierda(?string $fuer_musc_triceps_inicial_izquierda): self
    {
        $this->fuer_musc_triceps_inicial_izquierda = $fuer_musc_triceps_inicial_izquierda;

        return $this;
    }

    public function getFuerMuscTricepsFinalIzquierda(): ?string
    {
        return $this->fuer_musc_triceps_final_izquierda;
    }

    public function setFuerMuscTricepsFinalIzquierda(?string $fuer_musc_triceps_final_izquierda): self
    {
        $this->fuer_musc_triceps_final_izquierda = $fuer_musc_triceps_final_izquierda;

        return $this;
    }

    public function getFuerMuscBraquialAnteriorInicialDerecha(): ?string
    {
        return $this->fuer_musc_braquial_anterior_inicial_derecha;
    }

    public function setFuerMuscBraquialAnteriorInicialDerecha(?string $fuer_musc_braquial_anterior_inicial_derecha): self
    {
        $this->fuer_musc_braquial_anterior_inicial_derecha = $fuer_musc_braquial_anterior_inicial_derecha;

        return $this;
    }

    public function getFuerMuscBraquialAnteriorFinalDerecha(): ?string
    {
        return $this->fuer_musc_braquial_anterior_final_derecha;
    }

    public function setFuerMuscBraquialAnteriorFinalDerecha(?string $fuer_musc_braquial_anterior_final_derecha): self
    {
        $this->fuer_musc_braquial_anterior_final_derecha = $fuer_musc_braquial_anterior_final_derecha;

        return $this;
    }

    public function getFuerMuscBraquialAnteriorInicialIzquierda(): ?string
    {
        return $this->fuer_musc_braquial_anterior_inicial_izquierda;
    }

    public function setFuerMuscBraquialAnteriorInicialIzquierda(?string $fuer_musc_braquial_anterior_inicial_izquierda): self
    {
        $this->fuer_musc_braquial_anterior_inicial_izquierda = $fuer_musc_braquial_anterior_inicial_izquierda;

        return $this;
    }

    public function getFuerMuscBraquialAnteriorFinalIzquierda(): ?string
    {
        return $this->fuer_musc_braquial_anterior_final_izquierda;
    }

    public function setFuerMuscBraquialAnteriorFinalIzquierda(?string $fuer_musc_braquial_anterior_final_izquierda): self
    {
        $this->fuer_musc_braquial_anterior_final_izquierda = $fuer_musc_braquial_anterior_final_izquierda;

        return $this;
    }

    public function getFuerMuscSupinadorLargoInicialDerecha(): ?string
    {
        return $this->fuer_musc_supinador_largo_inicial_derecha;
    }

    public function setFuerMuscSupinadorLargoInicialDerecha(?string $fuer_musc_supinador_largo_inicial_derecha): self
    {
        $this->fuer_musc_supinador_largo_inicial_derecha = $fuer_musc_supinador_largo_inicial_derecha;

        return $this;
    }

    public function getFuerMuscSupinadorLargoFinalDerecha(): ?string
    {
        return $this->fuer_musc_supinador_largo_final_derecha;
    }

    public function setFuerMuscSupinadorLargoFinalDerecha(?string $fuer_musc_supinador_largo_final_derecha): self
    {
        $this->fuer_musc_supinador_largo_final_derecha = $fuer_musc_supinador_largo_final_derecha;

        return $this;
    }

    public function getFuerMuscSupinadorLargoInicialIzquierda(): ?string
    {
        return $this->fuer_musc_supinador_largo_inicial_izquierda;
    }

    public function setFuerMuscSupinadorLargoInicialIzquierda(?string $fuer_musc_supinador_largo_inicial_izquierda): self
    {
        $this->fuer_musc_supinador_largo_inicial_izquierda = $fuer_musc_supinador_largo_inicial_izquierda;

        return $this;
    }

    public function getFuerMuscSupinadorLargoFinalIzquierda(): ?string
    {
        return $this->fuer_musc_supinador_largo_final_izquierda;
    }

    public function setFuerMuscSupinadorLargoFinalIzquierda(?string $fuer_musc_supinador_largo_final_izquierda): self
    {
        $this->fuer_musc_supinador_largo_final_izquierda = $fuer_musc_supinador_largo_final_izquierda;

        return $this;
    }

    public function getFuerMuscSupinadorCortoInicialDerecha(): ?string
    {
        return $this->fuer_musc_supinador_corto_inicial_derecha;
    }

    public function setFuerMuscSupinadorCortoInicialDerecha(?string $fuer_musc_supinador_corto_inicial_derecha): self
    {
        $this->fuer_musc_supinador_corto_inicial_derecha = $fuer_musc_supinador_corto_inicial_derecha;

        return $this;
    }

    public function getFuerMuscSupinadorCortoFinalDerecha(): ?string
    {
        return $this->fuer_musc_supinador_corto_final_derecha;
    }

    public function setFuerMuscSupinadorCortoFinalDerecha(?string $fuer_musc_supinador_corto_final_derecha): self
    {
        $this->fuer_musc_supinador_corto_final_derecha = $fuer_musc_supinador_corto_final_derecha;

        return $this;
    }

    public function getFuerMuscSupinadorCortoInicialIzquierda(): ?string
    {
        return $this->fuer_musc_supinador_corto_inicial_izquierda;
    }

    public function setFuerMuscSupinadorCortoInicialIzquierda(?string $fuer_musc_supinador_corto_inicial_izquierda): self
    {
        $this->fuer_musc_supinador_corto_inicial_izquierda = $fuer_musc_supinador_corto_inicial_izquierda;

        return $this;
    }

    public function getFuerMuscSupinadorCortoFinalIzquierda(): ?string
    {
        return $this->fuer_musc_supinador_corto_final_izquierda;
    }

    public function setFuerMuscSupinadorCortoFinalIzquierda(?string $fuer_musc_supinador_corto_final_izquierda): self
    {
        $this->fuer_musc_supinador_corto_final_izquierda = $fuer_musc_supinador_corto_final_izquierda;

        return $this;
    }

    public function getFuerMuscPronadoresInicialDerecha(): ?string
    {
        return $this->fuer_musc_pronadores_inicial_derecha;
    }

    public function setFuerMuscPronadoresInicialDerecha(?string $fuer_musc_pronadores_inicial_derecha): self
    {
        $this->fuer_musc_pronadores_inicial_derecha = $fuer_musc_pronadores_inicial_derecha;

        return $this;
    }

    public function getFuerMuscPronadoresFinalDerecha(): ?string
    {
        return $this->fuer_musc_pronadores_final_derecha;
    }

    public function setFuerMuscPronadoresFinalDerecha(?string $fuer_musc_pronadores_final_derecha): self
    {
        $this->fuer_musc_pronadores_final_derecha = $fuer_musc_pronadores_final_derecha;

        return $this;
    }

    public function getFuerMuscPronadoresInicialIzquierda(): ?string
    {
        return $this->fuer_musc_pronadores_inicial_izquierda;
    }

    public function setFuerMuscPronadoresInicialIzquierda(?string $fuer_musc_pronadores_inicial_izquierda): self
    {
        $this->fuer_musc_pronadores_inicial_izquierda = $fuer_musc_pronadores_inicial_izquierda;

        return $this;
    }

    public function getFuerMuscPronadoresFinalIzquierda(): ?string
    {
        return $this->fuer_musc_pronadores_final_izquierda;
    }

    public function setFuerMuscPronadoresFinalIzquierda(?string $fuer_musc_pronadores_final_izquierda): self
    {
        $this->fuer_musc_pronadores_final_izquierda = $fuer_musc_pronadores_final_izquierda;

        return $this;
    }

    public function getFlexibilidadHombroInicialDerecha(): ?string
    {
        return $this->flexibilidad_hombro_inicial_derecha;
    }

    public function setFlexibilidadHombroInicialDerecha(?string $flexibilidad_hombro_inicial_derecha): self
    {
        $this->flexibilidad_hombro_inicial_derecha = $flexibilidad_hombro_inicial_derecha;

        return $this;
    }

    public function getFlexibilidadHombroFinalDerecha(): ?string
    {
        return $this->flexibilidad_hombro_final_derecha;
    }

    public function setFlexibilidadHombroFinalDerecha(?string $flexibilidad_hombro_final_derecha): self
    {
        $this->flexibilidad_hombro_final_derecha = $flexibilidad_hombro_final_derecha;

        return $this;
    }

    public function getFlexibilidadHombroInicialIzquierda(): ?string
    {
        return $this->flexibilidad_hombro_inicial_izquierda;
    }

    public function setFlexibilidadHombroInicialIzquierda(?string $flexibilidad_hombro_inicial_izquierda): self
    {
        $this->flexibilidad_hombro_inicial_izquierda = $flexibilidad_hombro_inicial_izquierda;

        return $this;
    }

    public function getFlexibilidadHombroFinalIzquierda(): ?string
    {
        return $this->flexibilidad_hombro_final_izquierda;
    }

    public function setFlexibilidadHombroFinalIzquierda(?string $flexibilidad_hombro_final_izquierda): self
    {
        $this->flexibilidad_hombro_final_izquierda = $flexibilidad_hombro_final_izquierda;

        return $this;
    }

    public function getFlexibilidadBicepsInicialDerecha(): ?string
    {
        return $this->flexibilidad_biceps_inicial_derecha;
    }

    public function setFlexibilidadBicepsInicialDerecha(?string $flexibilidad_biceps_inicial_derecha): self
    {
        $this->flexibilidad_biceps_inicial_derecha = $flexibilidad_biceps_inicial_derecha;

        return $this;
    }

    public function getFlexibilidadBicepsFinalDerecha(): ?string
    {
        return $this->flexibilidad_biceps_final_derecha;
    }

    public function setFlexibilidadBicepsFinalDerecha(?string $flexibilidad_biceps_final_derecha): self
    {
        $this->flexibilidad_biceps_final_derecha = $flexibilidad_biceps_final_derecha;

        return $this;
    }

    public function getFlexibilidadBicepsInicialIzquierda(): ?string
    {
        return $this->flexibilidad_biceps_inicial_izquierda;
    }

    public function setFlexibilidadBicepsInicialIzquierda(?string $flexibilidad_biceps_inicial_izquierda): self
    {
        $this->flexibilidad_biceps_inicial_izquierda = $flexibilidad_biceps_inicial_izquierda;

        return $this;
    }

    public function getFlexibilidadBicepsFinalIzquierda(): ?string
    {
        return $this->flexibilidad_biceps_final_izquierda;
    }

    public function setFlexibilidadBicepsFinalIzquierda(?string $flexibilidad_biceps_final_izquierda): self
    {
        $this->flexibilidad_biceps_final_izquierda = $flexibilidad_biceps_final_izquierda;

        return $this;
    }

    public function getFlexibilidadTricepsInicialDerecha(): ?string
    {
        return $this->flexibilidad_triceps_inicial_derecha;
    }

    public function setFlexibilidadTricepsInicialDerecha(?string $flexibilidad_triceps_inicial_derecha): self
    {
        $this->flexibilidad_triceps_inicial_derecha = $flexibilidad_triceps_inicial_derecha;

        return $this;
    }

    public function getFlexibilidadTricepsFinalDerecha(): ?string
    {
        return $this->flexibilidad_triceps_final_derecha;
    }

    public function setFlexibilidadTricepsFinalDerecha(?string $flexibilidad_triceps_final_derecha): self
    {
        $this->flexibilidad_triceps_final_derecha = $flexibilidad_triceps_final_derecha;

        return $this;
    }

    public function getFlexibilidadTricepsInicialIzquierda(): ?string
    {
        return $this->flexibilidad_triceps_inicial_izquierda;
    }

    public function setFlexibilidadTricepsInicialIzquierda(?string $flexibilidad_triceps_inicial_izquierda): self
    {
        $this->flexibilidad_triceps_inicial_izquierda = $flexibilidad_triceps_inicial_izquierda;

        return $this;
    }

    public function getFlexibilidadTricepsFinalIzquierda(): ?string
    {
        return $this->flexibilidad_triceps_final_izquierda;
    }

    public function setFlexibilidadTricepsFinalIzquierda(?string $flexibilidad_triceps_final_izquierda): self
    {
        $this->flexibilidad_triceps_final_izquierda = $flexibilidad_triceps_final_izquierda;

        return $this;
    }

    public function getPrueEspeMaudsleyInicialDerecha(): ?string
    {
        return $this->prue_espe_maudsley_inicial_derecha;
    }

    public function setPrueEspeMaudsleyInicialDerecha(?string $prue_espe_maudsley_inicial_derecha): self
    {
        $this->prue_espe_maudsley_inicial_derecha = $prue_espe_maudsley_inicial_derecha;

        return $this;
    }

    public function getPrueEspeMaudsleyFinalDerecha(): ?string
    {
        return $this->prue_espe_maudsley_final_derecha;
    }

    public function setPrueEspeMaudsleyFinalDerecha(?string $prue_espe_maudsley_final_derecha): self
    {
        $this->prue_espe_maudsley_final_derecha = $prue_espe_maudsley_final_derecha;

        return $this;
    }

    public function getPrueEspeMaudsleyInicialIzquierda(): ?string
    {
        return $this->prue_espe_maudsley_inicial_izquierda;
    }

    public function setPrueEspeMaudsleyInicialIzquierda(?string $prue_espe_maudsley_inicial_izquierda): self
    {
        $this->prue_espe_maudsley_inicial_izquierda = $prue_espe_maudsley_inicial_izquierda;

        return $this;
    }

    public function getPrueEspeMaudsleyFinalIzquierda(): ?string
    {
        return $this->prue_espe_maudsley_final_izquierda;
    }

    public function setPrueEspeMaudsleyFinalIzquierda(?string $prue_espe_maudsley_final_izquierda): self
    {
        $this->prue_espe_maudsley_final_izquierda = $prue_espe_maudsley_final_izquierda;

        return $this;
    }

    public function getPrueEspeTestMillInicialDerecha(): ?string
    {
        return $this->prue_espe_test_mill_inicial_derecha;
    }

    public function setPrueEspeTestMillInicialDerecha(?string $prue_espe_test_mill_inicial_derecha): self
    {
        $this->prue_espe_test_mill_inicial_derecha = $prue_espe_test_mill_inicial_derecha;

        return $this;
    }

    public function getPrueEspeTestMillFinalDerecha(): ?string
    {
        return $this->prue_espe_test_mill_final_derecha;
    }

    public function setPrueEspeTestMillFinalDerecha(?string $prue_espe_test_mill_final_derecha): self
    {
        $this->prue_espe_test_mill_final_derecha = $prue_espe_test_mill_final_derecha;

        return $this;
    }

    public function getPrueEspeTestMillInicialIzquierda(): ?string
    {
        return $this->prue_espe_test_mill_inicial_izquierda;
    }

    public function setPrueEspeTestMillInicialIzquierda(?string $prue_espe_test_mill_inicial_izquierda): self
    {
        $this->prue_espe_test_mill_inicial_izquierda = $prue_espe_test_mill_inicial_izquierda;

        return $this;
    }

    public function getPrueEspeTestMillFinalIzquierda(): ?string
    {
        return $this->prue_espe_test_mill_final_izquierda;
    }

    public function setPrueEspeTestMillFinalIzquierda(?string $prue_espe_test_mill_final_izquierda): self
    {
        $this->prue_espe_test_mill_final_izquierda = $prue_espe_test_mill_final_izquierda;

        return $this;
    }

    public function getPrueEspeHiperflexionMunecaInicialDerecha(): ?string
    {
        return $this->prue_espe_hiperflexion_muneca_inicial_derecha;
    }

    public function setPrueEspeHiperflexionMunecaInicialDerecha(?string $prue_espe_hiperflexion_muneca_inicial_derecha): self
    {
        $this->prue_espe_hiperflexion_muneca_inicial_derecha = $prue_espe_hiperflexion_muneca_inicial_derecha;

        return $this;
    }

    public function getPrueEspeHiperflexionMunecaFinalDerecha(): ?string
    {
        return $this->prue_espe_hiperflexion_muneca_final_derecha;
    }

    public function setPrueEspeHiperflexionMunecaFinalDerecha(?string $prue_espe_hiperflexion_muneca_final_derecha): self
    {
        $this->prue_espe_hiperflexion_muneca_final_derecha = $prue_espe_hiperflexion_muneca_final_derecha;

        return $this;
    }

    public function getPrueEspeHiperflexionMunecaInicialIzquierda(): ?string
    {
        return $this->prue_espe_hiperflexion_muneca_inicial_izquierda;
    }

    public function setPrueEspeHiperflexionMunecaInicialIzquierda(?string $prue_espe_hiperflexion_muneca_inicial_izquierda): self
    {
        $this->prue_espe_hiperflexion_muneca_inicial_izquierda = $prue_espe_hiperflexion_muneca_inicial_izquierda;

        return $this;
    }

    public function getPrueEspeHiperflexionMunecaFinalIzquierda(): ?string
    {
        return $this->prue_espe_hiperflexion_muneca_final_izquierda;
    }

    public function setPrueEspeHiperflexionMunecaFinalIzquierda(?string $prue_espe_hiperflexion_muneca_final_izquierda): self
    {
        $this->prue_espe_hiperflexion_muneca_final_izquierda = $prue_espe_hiperflexion_muneca_final_izquierda;

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

    public function getTratamientoEstimulacion(): ?bool
    {
        return $this->tratamiento_estimulacion;
    }

    public function setTratamientoEstimulacion(?bool $tratamiento_estimulacion): self
    {
        $this->tratamiento_estimulacion = $tratamiento_estimulacion;

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

    public function getTecnFacilKabbat(): ?bool
    {
        return $this->tecn_facil_kabbat;
    }

    public function setTecnFacilKabbat(?bool $tecn_facil_kabbat): self
    {
        $this->tecn_facil_kabbat = $tecn_facil_kabbat;

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

    public function getOtrasOdonobieu(): ?bool
    {
        return $this->otras_odonobieu;
    }

    public function setOtrasOdonobieu(?bool $otras_odonobieu): self
    {
        $this->otras_odonobieu = $otras_odonobieu;

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

    public function getEjerciciosIsocineticos(): ?bool
    {
        return $this->ejercicios_isocineticos;
    }

    public function setEjerciciosIsocineticos(?bool $ejercicios_isocineticos): self
    {
        $this->ejercicios_isocineticos = $ejercicios_isocineticos;

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

    public function getAparatosPlastilina(): ?bool
    {
        return $this->aparatos_plastilina;
    }

    public function setAparatosPlastilina(?bool $aparatos_plastilina): self
    {
        $this->aparatos_plastilina = $aparatos_plastilina;

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

    public function getAditamentosCabestrillo(): ?bool
    {
        return $this->aditamentos_cabestrillo;
    }

    public function setAditamentosCabestrillo(?bool $aditamentos_cabestrillo): self
    {
        $this->aditamentos_cabestrillo = $aditamentos_cabestrillo;

        return $this;
    }

    public function getAditamentosTipoAvion(): ?bool
    {
        return $this->aditamentos_tipo_avion;
    }

    public function setAditamentosTipoAvion(?bool $aditamentos_tipo_avion): self
    {
        $this->aditamentos_tipo_avion = $aditamentos_tipo_avion;

        return $this;
    }

    public function getAditamentosFerula(): ?bool
    {
        return $this->aditamentos_ferula;
    }

    public function setAditamentosFerula(?bool $aditamentos_ferula): self
    {
        $this->aditamentos_ferula = $aditamentos_ferula;

        return $this;
    }

    public function getAditamentosOtros(): ?bool
    {
        return $this->aditamentos_otros;
    }

    public function setAditamentosOtros(?bool $aditamentos_otros): self
    {
        $this->aditamentos_otros = $aditamentos_otros;

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
