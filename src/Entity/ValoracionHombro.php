<?php

namespace App\Entity;

use App\Repository\ValoracionHombroRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ValoracionHombroRepository::class)
 */
class ValoracionHombro
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
    private $edema_5cm_acromio_inicial_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $edema_5cm_acromio_final_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $edema_5cm_acromio_inicial_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $edema_5cm_acromio_final_izquierda;

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
     * @ORM\Column(type="string", length=50)
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
    private $trofismo_14cm_oleocranon_inicial_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $trofismo_14cm_oleocranon_final_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $trofismo_14cm_oleocranon_inicial_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $trofismo_14cm_oleocranon_final_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $mov_art_flexion_inicial_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $mov_art_flexion_final_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $mov_art_flexion_inicial_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $mov_art_flexion_final_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $mov_art_extension_inicial_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $mov_art_extension_final_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $mov_art_extension_inicial_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $mov_art_extension_final_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $mov_art_abduccion_inicial_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $mov_art_abduccion_final_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $mov_art_abduccion_inicial_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $mov_art_abduccion_final_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $mov_art_abduccion_horizontal_inicial_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $mov_art_abduccion_horizontal_final_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $mov_art_abduccion_horizontal_inicial_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $mov_art_abduccion_horizontal_final_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $mov_art_rotacion_interna_inicial_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $mov_art_rotacion_interna_final_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $mov_art_rotacion_interna_inicial_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $mov_art_rotacion_interna_final_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $mov_art_rotacion_externa_inicial_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $mov_art_rotacion_externa_final_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $mov_art_rotacion_externa_inicial_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $mov_art_rotacion_externa_final_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $fuer_musc_deltoides_anteriores_inicial_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $fuer_musc_deltoides_anteriores_final_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $fuer_musc_deltoides_anteriores_inicial_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $fuer_musc_deltoides_anteriores_final_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $fuer_musc_deltoides_medios_inicial_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $fuer_musc_deltoides_medios_final_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $fuer_musc_deltoides_medios_inicial_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $fuer_musc_deltoides_medios_final_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $fuer_musc_deltoides_posteriores_inicial_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $fuer_musc_deltoides_posteriores_final_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $fuer_musc_deltoides_posteriores_inicial_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $fuer_musc_deltoides_posteriores_final_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $fuer_musc_dorsal_ancho_inicial_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $fuer_musc_dorsal_ancho_final_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $fuer_musc_dorsal_ancho_inicial_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $fuer_musc_dorsal_ancho_final_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $fuer_musc_subescapular_inicial_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $fuer_musc_subescapular_final_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $fuer_musc_subescapular_inicial_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $fuer_musc_subescapular_final_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $fuer_musc_infraespinoso_inicial_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $fuer_musc_infraespinoso_final_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $fuer_musc_infraespinoso_inicial_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $fuer_musc_infraespinoso_final_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $fuer_musc_pectoral_mayor_inicial_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $fuer_musc_pectoral_mayor_final_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $fuer_musc_pectoral_mayor_inicial_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $fuer_musc_pectoral_mayor_final_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $flexibilidad_rotadores_internos_inicial_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $flexibilidad_rotadores_internos_final_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $flexibilidad_rotadores_internos_inicial_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $flexibilidad_rotadores_internos_final_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $flexibilidad_rotadores_externos_inicial_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $flexibilidad_rotadores_externos_final_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $flexibilidad_rotadores_externos_inicial_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $flexibilidad_rotadores_externos_final_izquierda;

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
    private $flexibilidad_capsula_anterior_inicial_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $flexibilidad_capsula_anterior_final_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $flexibilidad_capsula_anterior_inicial_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $flexibilidad_capsula_anterior_final_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $flexibilidad_capsula_posterior_inicial_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $flexibilidad_capsula_posterior_final_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $flexibilidad_capsula_posterior_inicial_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $flexibilidad_capsula_posterior_final_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $prue_espe_manguito_rotador_inicial_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $prue_espe_manguito_rotador_final_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $prue_espe_manguito_rotador_inicial_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $prue_espe_manguito_rotador_final_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $prue_espe_supraespinoso_inicial_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $prue_espe_supraespinoso_final_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $prue_espe_supraespinoso_inicial_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $prue_espe_supraespinoso_final_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $prue_espe_brazo_caido_inicial_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $prue_espe_brazo_caido_final_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $prue_espe_brazo_caido_inicial_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $prue_espe_brazo_caido_final_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $pinzamiento_neer_inicial_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $pinzamiento_neer_final_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $pinzamiento_neer_inicial_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $pinzamiento_neer_final_izquierda;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $pinzamiento_hawkins_inicial_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $pinzamiento_hawkins_final_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $pinzamiento_hawkins_inicial_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $pinzamiento_hawkins_final_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $tend_bici_speed_inicial_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $tend_bici_speed_final_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $tend_bici_speed_inicial_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $tend_bici_speed_final_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $inestabilidad_surco_inicial_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $inestabilidad_surco_final_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $inestabilidad_surco_inicial_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $inestabilidad_surco_final_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $inestabilidad_cajon_anterior_inicial_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $inestabilidad_cajon_anterior_final_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $inestabilidad_cajon_anterior_inicial_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $inestabilidad_cajon_anterior_final_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $inestabilidad_cajon_posterior_inicial_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $inestabilidad_cajon_posterior_final_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $inestabilidad_cajon_posterior_inicial_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $inestabilidad_cajon_posterior_final_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $sost_roos_inicial_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $sost_roos_final_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $sost_roos_inicial_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $sost_roos_final_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $postura_alineacion_hombros_vi;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $postura_alineacion_hombros_vf;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $postura_alineacion_mamas_tetillas_vi;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $postura_alineacion_mamas_tetillas_vf;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $postura_alineacion_espinal_iliacas_vi;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $postura_alineacion_espinal_iliacas_vf;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $postura_inclinacion_tronco_vi;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $postura_inclinacion_tronco_vf;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $postura_flancos_vi;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $postura_flancos_vf;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $postura_lordosis_cervical_vi;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $postura_lordosis_cervical_vf;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $postura_cifosis_dorsal_vi;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $postura_cifosis_dorsal_vf;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $postura_lordosis_lumbar_vi;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $postura_lordosis_lumbar_vf;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $postura_basculacion_pelvica_vi;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $postura_basculacion_pelvica_vf;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $postura_escoliosis_vi;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $postura_escoliosis_vf;

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
    private $tecn_facil_kabbat;

    /**
     * @ORM\Column(type="boolean", nullable=true)
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
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $ejercicios_estiramientos;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $ejercicios_pendulares;

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
    private $otras_kester;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $otras_cadena_cinetica_cerrada;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $entrenamiento_marcha_barras;

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

    public function setId(int $id): self
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

    public function getEdema5cmAcromioInicialDerecha(): ?string
    {
        return $this->edema_5cm_acromio_inicial_derecha;
    }

    public function setEdema5cmAcromioInicialDerecha(?string $edema_5cm_acromio_inicial_derecha): self
    {
        $this->edema_5cm_acromio_inicial_derecha = $edema_5cm_acromio_inicial_derecha;

        return $this;
    }

    public function getEdema5cmAcromioFinalDerecha(): ?string
    {
        return $this->edema_5cm_acromio_final_derecha;
    }

    public function setEdema5cmAcromioFinalDerecha(?string $edema_5cm_acromio_final_derecha): self
    {
        $this->edema_5cm_acromio_final_derecha = $edema_5cm_acromio_final_derecha;

        return $this;
    }

    public function getEdema5cmAcromioInicialIzquierda(): ?string
    {
        return $this->edema_5cm_acromio_inicial_izquierda;
    }

    public function setEdema5cmAcromioInicialIzquierda(?string $edema_5cm_acromio_inicial_izquierda): self
    {
        $this->edema_5cm_acromio_inicial_izquierda = $edema_5cm_acromio_inicial_izquierda;

        return $this;
    }

    public function getEdema5cmAcromioFinalIzquierda(): ?string
    {
        return $this->edema_5cm_acromio_final_izquierda;
    }

    public function setEdema5cmAcromioFinalIzquierda(?string $edema_5cm_acromio_final_izquierda): self
    {
        $this->edema_5cm_acromio_final_izquierda = $edema_5cm_acromio_final_izquierda;

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

    public function setEdemaGrado1FinalIzquierda(string $edema_grado_1_final_izquierda): self
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

    public function getTrofismo14cmOleocranonInicialDerecha(): ?string
    {
        return $this->trofismo_14cm_oleocranon_inicial_derecha;
    }

    public function setTrofismo14cmOleocranonInicialDerecha(?string $trofismo_14cm_oleocranon_inicial_derecha): self
    {
        $this->trofismo_14cm_oleocranon_inicial_derecha = $trofismo_14cm_oleocranon_inicial_derecha;

        return $this;
    }

    public function getTrofismo14cmOleocranonFinalDerecha(): ?string
    {
        return $this->trofismo_14cm_oleocranon_final_derecha;
    }

    public function setTrofismo14cmOleocranonFinalDerecha(?string $trofismo_14cm_oleocranon_final_derecha): self
    {
        $this->trofismo_14cm_oleocranon_final_derecha = $trofismo_14cm_oleocranon_final_derecha;

        return $this;
    }

    public function getTrofismo14cmOleocranonInicialIzquierda(): ?string
    {
        return $this->trofismo_14cm_oleocranon_inicial_izquierda;
    }

    public function setTrofismo14cmOleocranonInicialIzquierda(?string $trofismo_14cm_oleocranon_inicial_izquierda): self
    {
        $this->trofismo_14cm_oleocranon_inicial_izquierda = $trofismo_14cm_oleocranon_inicial_izquierda;

        return $this;
    }

    public function getTrofismo14cmOleocranonFinalIzquierda(): ?string
    {
        return $this->trofismo_14cm_oleocranon_final_izquierda;
    }

    public function setTrofismo14cmOleocranonFinalIzquierda(?string $trofismo_14cm_oleocranon_final_izquierda): self
    {
        $this->trofismo_14cm_oleocranon_final_izquierda = $trofismo_14cm_oleocranon_final_izquierda;

        return $this;
    }

    public function getMovArtFlexionInicialDerecha(): ?string
    {
        return $this->mov_art_flexion_inicial_derecha;
    }

    public function setMovArtFlexionInicialDerecha(?string $mov_art_flexion_inicial_derecha): self
    {
        $this->mov_art_flexion_inicial_derecha = $mov_art_flexion_inicial_derecha;

        return $this;
    }

    public function getMovArtFlexionFinalDerecha(): ?string
    {
        return $this->mov_art_flexion_final_derecha;
    }

    public function setMovArtFlexionFinalDerecha(?string $mov_art_flexion_final_derecha): self
    {
        $this->mov_art_flexion_final_derecha = $mov_art_flexion_final_derecha;

        return $this;
    }

    public function getMovArtFlexionInicialIzquierda(): ?string
    {
        return $this->mov_art_flexion_inicial_izquierda;
    }

    public function setMovArtFlexionInicialIzquierda(?string $mov_art_flexion_inicial_izquierda): self
    {
        $this->mov_art_flexion_inicial_izquierda = $mov_art_flexion_inicial_izquierda;

        return $this;
    }

    public function getMovArtFlexionFinalIzquierda(): ?string
    {
        return $this->mov_art_flexion_final_izquierda;
    }

    public function setMovArtFlexionFinalIzquierda(?string $mov_art_flexion_final_izquierda): self
    {
        $this->mov_art_flexion_final_izquierda = $mov_art_flexion_final_izquierda;

        return $this;
    }

    public function getMovArtExtensionInicialDerecha(): ?string
    {
        return $this->mov_art_extension_inicial_derecha;
    }

    public function setMovArtExtensionInicialDerecha(?string $mov_art_extension_inicial_derecha): self
    {
        $this->mov_art_extension_inicial_derecha = $mov_art_extension_inicial_derecha;

        return $this;
    }

    public function getMovArtExtensionFinalDerecha(): ?string
    {
        return $this->mov_art_extension_final_derecha;
    }

    public function setMovArtExtensionFinalDerecha(?string $mov_art_extension_final_derecha): self
    {
        $this->mov_art_extension_final_derecha = $mov_art_extension_final_derecha;

        return $this;
    }

    public function getMovArtExtensionInicialIzquierda(): ?string
    {
        return $this->mov_art_extension_inicial_izquierda;
    }

    public function setMovArtExtensionInicialIzquierda(?string $mov_art_extension_inicial_izquierda): self
    {
        $this->mov_art_extension_inicial_izquierda = $mov_art_extension_inicial_izquierda;

        return $this;
    }

    public function getMovArtExtensionFinalIzquierda(): ?string
    {
        return $this->mov_art_extension_final_izquierda;
    }

    public function setMovArtExtensionFinalIzquierda(?string $mov_art_extension_final_izquierda): self
    {
        $this->mov_art_extension_final_izquierda = $mov_art_extension_final_izquierda;

        return $this;
    }

    public function getMovArtAbduccionInicialDerecha(): ?string
    {
        return $this->mov_art_abduccion_inicial_derecha;
    }

    public function setMovArtAbduccionInicialDerecha(?string $mov_art_abduccion_inicial_derecha): self
    {
        $this->mov_art_abduccion_inicial_derecha = $mov_art_abduccion_inicial_derecha;

        return $this;
    }

    public function getMovArtAbduccionFinalDerecha(): ?string
    {
        return $this->mov_art_abduccion_final_derecha;
    }

    public function setMovArtAbduccionFinalDerecha(?string $mov_art_abduccion_final_derecha): self
    {
        $this->mov_art_abduccion_final_derecha = $mov_art_abduccion_final_derecha;

        return $this;
    }

    public function getMovArtAbduccionInicialIzquierda(): ?string
    {
        return $this->mov_art_abduccion_inicial_izquierda;
    }

    public function setMovArtAbduccionInicialIzquierda(?string $mov_art_abduccion_inicial_izquierda): self
    {
        $this->mov_art_abduccion_inicial_izquierda = $mov_art_abduccion_inicial_izquierda;

        return $this;
    }

    public function getMovArtAbduccionFinalIzquierda(): ?string
    {
        return $this->mov_art_abduccion_final_izquierda;
    }

    public function setMovArtAbduccionFinalIzquierda(?string $mov_art_abduccion_final_izquierda): self
    {
        $this->mov_art_abduccion_final_izquierda = $mov_art_abduccion_final_izquierda;

        return $this;
    }

    public function getMovArtAbduccionHorizontalInicialDerecha(): ?string
    {
        return $this->mov_art_abduccion_horizontal_inicial_derecha;
    }

    public function setMovArtAbduccionHorizontalInicialDerecha(?string $mov_art_abduccion_horizontal_inicial_derecha): self
    {
        $this->mov_art_abduccion_horizontal_inicial_derecha = $mov_art_abduccion_horizontal_inicial_derecha;

        return $this;
    }

    public function getMovArtAbduccionHorizontalFinalDerecha(): ?string
    {
        return $this->mov_art_abduccion_horizontal_final_derecha;
    }

    public function setMovArtAbduccionHorizontalFinalDerecha(?string $mov_art_abduccion_horizontal_final_derecha): self
    {
        $this->mov_art_abduccion_horizontal_final_derecha = $mov_art_abduccion_horizontal_final_derecha;

        return $this;
    }

    public function getMovArtAbduccionHorizontalInicialIzquierda(): ?string
    {
        return $this->mov_art_abduccion_horizontal_inicial_izquierda;
    }

    public function setMovArtAbduccionHorizontalInicialIzquierda(?string $mov_art_abduccion_horizontal_inicial_izquierda): self
    {
        $this->mov_art_abduccion_horizontal_inicial_izquierda = $mov_art_abduccion_horizontal_inicial_izquierda;

        return $this;
    }

    public function getMovArtAbduccionHorizontalFinalIzquierda(): ?string
    {
        return $this->mov_art_abduccion_horizontal_final_izquierda;
    }

    public function setMovArtAbduccionHorizontalFinalIzquierda(?string $mov_art_abduccion_horizontal_final_izquierda): self
    {
        $this->mov_art_abduccion_horizontal_final_izquierda = $mov_art_abduccion_horizontal_final_izquierda;

        return $this;
    }

    public function getMovArtRotacionInternaInicialDerecha(): ?string
    {
        return $this->mov_art_rotacion_interna_inicial_derecha;
    }

    public function setMovArtRotacionInternaInicialDerecha(?string $mov_art_rotacion_interna_inicial_derecha): self
    {
        $this->mov_art_rotacion_interna_inicial_derecha = $mov_art_rotacion_interna_inicial_derecha;

        return $this;
    }

    public function getMovArtRotacionInternaFinalDerecha(): ?string
    {
        return $this->mov_art_rotacion_interna_final_derecha;
    }

    public function setMovArtRotacionInternaFinalDerecha(?string $mov_art_rotacion_interna_final_derecha): self
    {
        $this->mov_art_rotacion_interna_final_derecha = $mov_art_rotacion_interna_final_derecha;

        return $this;
    }

    public function getMovArtRotacionInternaInicialIzquierda(): ?string
    {
        return $this->mov_art_rotacion_interna_inicial_izquierda;
    }

    public function setMovArtRotacionInternaInicialIzquierda(?string $mov_art_rotacion_interna_inicial_izquierda): self
    {
        $this->mov_art_rotacion_interna_inicial_izquierda = $mov_art_rotacion_interna_inicial_izquierda;

        return $this;
    }

    public function getMovArtRotacionInternaFinalIzquierda(): ?string
    {
        return $this->mov_art_rotacion_interna_final_izquierda;
    }

    public function setMovArtRotacionInternaFinalIzquierda(?string $mov_art_rotacion_interna_final_izquierda): self
    {
        $this->mov_art_rotacion_interna_final_izquierda = $mov_art_rotacion_interna_final_izquierda;

        return $this;
    }

    public function getMovArtRotacionExternaInicialDerecha(): ?string
    {
        return $this->mov_art_rotacion_externa_inicial_derecha;
    }

    public function setMovArtRotacionExternaInicialDerecha(?string $mov_art_rotacion_externa_inicial_derecha): self
    {
        $this->mov_art_rotacion_externa_inicial_derecha = $mov_art_rotacion_externa_inicial_derecha;

        return $this;
    }

    public function getMovArtRotacionExternaFinalDerecha(): ?string
    {
        return $this->mov_art_rotacion_externa_final_derecha;
    }

    public function setMovArtRotacionExternaFinalDerecha(?string $mov_art_rotacion_externa_final_derecha): self
    {
        $this->mov_art_rotacion_externa_final_derecha = $mov_art_rotacion_externa_final_derecha;

        return $this;
    }

    public function getMovArtRotacionExternaInicialIzquierda(): ?string
    {
        return $this->mov_art_rotacion_externa_inicial_izquierda;
    }

    public function setMovArtRotacionExternaInicialIzquierda(?string $mov_art_rotacion_externa_inicial_izquierda): self
    {
        $this->mov_art_rotacion_externa_inicial_izquierda = $mov_art_rotacion_externa_inicial_izquierda;

        return $this;
    }

    public function getMovArtRotacionExternaFinalIzquierda(): ?string
    {
        return $this->mov_art_rotacion_externa_final_izquierda;
    }

    public function setMovArtRotacionExternaFinalIzquierda(?string $mov_art_rotacion_externa_final_izquierda): self
    {
        $this->mov_art_rotacion_externa_final_izquierda = $mov_art_rotacion_externa_final_izquierda;

        return $this;
    }

    public function getFuerMuscDeltoidesAnterioresInicialDerecha(): ?string
    {
        return $this->fuer_musc_deltoides_anteriores_inicial_derecha;
    }

    public function setFuerMuscDeltoidesAnterioresInicialDerecha(?string $fuer_musc_deltoides_anteriores_inicial_derecha): self
    {
        $this->fuer_musc_deltoides_anteriores_inicial_derecha = $fuer_musc_deltoides_anteriores_inicial_derecha;

        return $this;
    }

    public function getFuerMuscDeltoidesAnterioresFinalDerecha(): ?string
    {
        return $this->fuer_musc_deltoides_anteriores_final_derecha;
    }

    public function setFuerMuscDeltoidesAnterioresFinalDerecha(?string $fuer_musc_deltoides_anteriores_final_derecha): self
    {
        $this->fuer_musc_deltoides_anteriores_final_derecha = $fuer_musc_deltoides_anteriores_final_derecha;

        return $this;
    }

    public function getFuerMuscDeltoidesAnterioresInicialIzquierda(): ?string
    {
        return $this->fuer_musc_deltoides_anteriores_inicial_izquierda;
    }

    public function setFuerMuscDeltoidesAnterioresInicialIzquierda(?string $fuer_musc_deltoides_anteriores_inicial_izquierda): self
    {
        $this->fuer_musc_deltoides_anteriores_inicial_izquierda = $fuer_musc_deltoides_anteriores_inicial_izquierda;

        return $this;
    }

    public function getFuerMuscDeltoidesAnterioresFinalIzquierda(): ?string
    {
        return $this->fuer_musc_deltoides_anteriores_final_izquierda;
    }

    public function setFuerMuscDeltoidesAnterioresFinalIzquierda(?string $fuer_musc_deltoides_anteriores_final_izquierda): self
    {
        $this->fuer_musc_deltoides_anteriores_final_izquierda = $fuer_musc_deltoides_anteriores_final_izquierda;

        return $this;
    }

    public function getFuerMuscDeltoidesMediosInicialDerecha(): ?string
    {
        return $this->fuer_musc_deltoides_medios_inicial_derecha;
    }

    public function setFuerMuscDeltoidesMediosInicialDerecha(?string $fuer_musc_deltoides_medios_inicial_derecha): self
    {
        $this->fuer_musc_deltoides_medios_inicial_derecha = $fuer_musc_deltoides_medios_inicial_derecha;

        return $this;
    }

    public function getFuerMuscDeltoidesMediosFinalDerecha(): ?string
    {
        return $this->fuer_musc_deltoides_medios_final_derecha;
    }

    public function setFuerMuscDeltoidesMediosFinalDerecha(?string $fuer_musc_deltoides_medios_final_derecha): self
    {
        $this->fuer_musc_deltoides_medios_final_derecha = $fuer_musc_deltoides_medios_final_derecha;

        return $this;
    }

    public function getFuerMuscDeltoidesMediosInicialIzquierda(): ?string
    {
        return $this->fuer_musc_deltoides_medios_inicial_izquierda;
    }

    public function setFuerMuscDeltoidesMediosInicialIzquierda(?string $fuer_musc_deltoides_medios_inicial_izquierda): self
    {
        $this->fuer_musc_deltoides_medios_inicial_izquierda = $fuer_musc_deltoides_medios_inicial_izquierda;

        return $this;
    }

    public function getFuerMuscDeltoidesMediosFinalIzquierda(): ?string
    {
        return $this->fuer_musc_deltoides_medios_final_izquierda;
    }

    public function setFuerMuscDeltoidesMediosFinalIzquierda(?string $fuer_musc_deltoides_medios_final_izquierda): self
    {
        $this->fuer_musc_deltoides_medios_final_izquierda = $fuer_musc_deltoides_medios_final_izquierda;

        return $this;
    }

    public function getFuerMuscDeltoidesPosterioresInicialDerecha(): ?string
    {
        return $this->fuer_musc_deltoides_posteriores_inicial_derecha;
    }

    public function setFuerMuscDeltoidesPosterioresInicialDerecha(?string $fuer_musc_deltoides_posteriores_inicial_derecha): self
    {
        $this->fuer_musc_deltoides_posteriores_inicial_derecha = $fuer_musc_deltoides_posteriores_inicial_derecha;

        return $this;
    }

    public function getFuerMuscDeltoidesPosterioresFinalDerecha(): ?string
    {
        return $this->fuer_musc_deltoides_posteriores_final_derecha;
    }

    public function setFuerMuscDeltoidesPosterioresFinalDerecha(?string $fuer_musc_deltoides_posteriores_final_derecha): self
    {
        $this->fuer_musc_deltoides_posteriores_final_derecha = $fuer_musc_deltoides_posteriores_final_derecha;

        return $this;
    }

    public function getFuerMuscDeltoidesPosterioresInicialIzquierda(): ?string
    {
        return $this->fuer_musc_deltoides_posteriores_inicial_izquierda;
    }

    public function setFuerMuscDeltoidesPosterioresInicialIzquierda(?string $fuer_musc_deltoides_posteriores_inicial_izquierda): self
    {
        $this->fuer_musc_deltoides_posteriores_inicial_izquierda = $fuer_musc_deltoides_posteriores_inicial_izquierda;

        return $this;
    }

    public function getFuerMuscDeltoidesPosterioresFinalIzquierda(): ?string
    {
        return $this->fuer_musc_deltoides_posteriores_final_izquierda;
    }

    public function setFuerMuscDeltoidesPosterioresFinalIzquierda(?string $fuer_musc_deltoides_posteriores_final_izquierda): self
    {
        $this->fuer_musc_deltoides_posteriores_final_izquierda = $fuer_musc_deltoides_posteriores_final_izquierda;

        return $this;
    }

    public function getFuerMuscDorsalAnchoInicialDerecha(): ?string
    {
        return $this->fuer_musc_dorsal_ancho_inicial_derecha;
    }

    public function setFuerMuscDorsalAnchoInicialDerecha(?string $fuer_musc_dorsal_ancho_inicial_derecha): self
    {
        $this->fuer_musc_dorsal_ancho_inicial_derecha = $fuer_musc_dorsal_ancho_inicial_derecha;

        return $this;
    }

    public function getFuerMuscDorsalAnchoFinalDerecha(): ?string
    {
        return $this->fuer_musc_dorsal_ancho_final_derecha;
    }

    public function setFuerMuscDorsalAnchoFinalDerecha(?string $fuer_musc_dorsal_ancho_final_derecha): self
    {
        $this->fuer_musc_dorsal_ancho_final_derecha = $fuer_musc_dorsal_ancho_final_derecha;

        return $this;
    }

    public function getFuerMuscDorsalAnchoInicialIzquierda(): ?string
    {
        return $this->fuer_musc_dorsal_ancho_inicial_izquierda;
    }

    public function setFuerMuscDorsalAnchoInicialIzquierda(?string $fuer_musc_dorsal_ancho_inicial_izquierda): self
    {
        $this->fuer_musc_dorsal_ancho_inicial_izquierda = $fuer_musc_dorsal_ancho_inicial_izquierda;

        return $this;
    }

    public function getFuerMuscDorsalAnchoFinalIzquierda(): ?string
    {
        return $this->fuer_musc_dorsal_ancho_final_izquierda;
    }

    public function setFuerMuscDorsalAnchoFinalIzquierda(?string $fuer_musc_dorsal_ancho_final_izquierda): self
    {
        $this->fuer_musc_dorsal_ancho_final_izquierda = $fuer_musc_dorsal_ancho_final_izquierda;

        return $this;
    }

    public function getFuerMuscSubescapularInicialDerecha(): ?string
    {
        return $this->fuer_musc_subescapular_inicial_derecha;
    }

    public function setFuerMuscSubescapularInicialDerecha(?string $fuer_musc_subescapular_inicial_derecha): self
    {
        $this->fuer_musc_subescapular_inicial_derecha = $fuer_musc_subescapular_inicial_derecha;

        return $this;
    }

    public function getFuerMuscSubescapularFinalDerecha(): ?string
    {
        return $this->fuer_musc_subescapular_final_derecha;
    }

    public function setFuerMuscSubescapularFinalDerecha(?string $fuer_musc_subescapular_final_derecha): self
    {
        $this->fuer_musc_subescapular_final_derecha = $fuer_musc_subescapular_final_derecha;

        return $this;
    }

    public function getFuerMuscSubescapularInicialIzquierda(): ?string
    {
        return $this->fuer_musc_subescapular_inicial_izquierda;
    }

    public function setFuerMuscSubescapularInicialIzquierda(?string $fuer_musc_subescapular_inicial_izquierda): self
    {
        $this->fuer_musc_subescapular_inicial_izquierda = $fuer_musc_subescapular_inicial_izquierda;

        return $this;
    }

    public function getFuerMuscSubescapularFinalIzquierda(): ?string
    {
        return $this->fuer_musc_subescapular_final_izquierda;
    }

    public function setFuerMuscSubescapularFinalIzquierda(?string $fuer_musc_subescapular_final_izquierda): self
    {
        $this->fuer_musc_subescapular_final_izquierda = $fuer_musc_subescapular_final_izquierda;

        return $this;
    }

    public function getFuerMuscInfraespinosoInicialDerecha(): ?string
    {
        return $this->fuer_musc_infraespinoso_inicial_derecha;
    }

    public function setFuerMuscInfraespinosoInicialDerecha(?string $fuer_musc_infraespinoso_inicial_derecha): self
    {
        $this->fuer_musc_infraespinoso_inicial_derecha = $fuer_musc_infraespinoso_inicial_derecha;

        return $this;
    }

    public function getFuerMuscInfraespinosoFinalDerecha(): ?string
    {
        return $this->fuer_musc_infraespinoso_final_derecha;
    }

    public function setFuerMuscInfraespinosoFinalDerecha(?string $fuer_musc_infraespinoso_final_derecha): self
    {
        $this->fuer_musc_infraespinoso_final_derecha = $fuer_musc_infraespinoso_final_derecha;

        return $this;
    }

    public function getFuerMuscInfraespinosoInicialIzquierda(): ?string
    {
        return $this->fuer_musc_infraespinoso_inicial_izquierda;
    }

    public function setFuerMuscInfraespinosoInicialIzquierda(?string $fuer_musc_infraespinoso_inicial_izquierda): self
    {
        $this->fuer_musc_infraespinoso_inicial_izquierda = $fuer_musc_infraespinoso_inicial_izquierda;

        return $this;
    }

    public function getFuerMuscInfraespinosoFinalIzquierda(): ?string
    {
        return $this->fuer_musc_infraespinoso_final_izquierda;
    }

    public function setFuerMuscInfraespinosoFinalIzquierda(?string $fuer_musc_infraespinoso_final_izquierda): self
    {
        $this->fuer_musc_infraespinoso_final_izquierda = $fuer_musc_infraespinoso_final_izquierda;

        return $this;
    }

    public function getFuerMuscPectoralMayorInicialDerecha(): ?string
    {
        return $this->fuer_musc_pectoral_mayor_inicial_derecha;
    }

    public function setFuerMuscPectoralMayorInicialDerecha(?string $fuer_musc_pectoral_mayor_inicial_derecha): self
    {
        $this->fuer_musc_pectoral_mayor_inicial_derecha = $fuer_musc_pectoral_mayor_inicial_derecha;

        return $this;
    }

    public function getFuerMuscPectoralMayorFinalDerecha(): ?string
    {
        return $this->fuer_musc_pectoral_mayor_final_derecha;
    }

    public function setFuerMuscPectoralMayorFinalDerecha(?string $fuer_musc_pectoral_mayor_final_derecha): self
    {
        $this->fuer_musc_pectoral_mayor_final_derecha = $fuer_musc_pectoral_mayor_final_derecha;

        return $this;
    }

    public function getFuerMuscPectoralMayorInicialIzquierda(): ?string
    {
        return $this->fuer_musc_pectoral_mayor_inicial_izquierda;
    }

    public function setFuerMuscPectoralMayorInicialIzquierda(?string $fuer_musc_pectoral_mayor_inicial_izquierda): self
    {
        $this->fuer_musc_pectoral_mayor_inicial_izquierda = $fuer_musc_pectoral_mayor_inicial_izquierda;

        return $this;
    }

    public function getFuerMuscPectoralMayorFinalIzquierda(): ?string
    {
        return $this->fuer_musc_pectoral_mayor_final_izquierda;
    }

    public function setFuerMuscPectoralMayorFinalIzquierda(?string $fuer_musc_pectoral_mayor_final_izquierda): self
    {
        $this->fuer_musc_pectoral_mayor_final_izquierda = $fuer_musc_pectoral_mayor_final_izquierda;

        return $this;
    }

    public function getFlexibilidadRotadoresInternosInicialDerecha(): ?string
    {
        return $this->flexibilidad_rotadores_internos_inicial_derecha;
    }

    public function setFlexibilidadRotadoresInternosInicialDerecha(?string $flexibilidad_rotadores_internos_inicial_derecha): self
    {
        $this->flexibilidad_rotadores_internos_inicial_derecha = $flexibilidad_rotadores_internos_inicial_derecha;

        return $this;
    }

    public function getFlexibilidadRotadoresInternosFinalDerecha(): ?string
    {
        return $this->flexibilidad_rotadores_internos_final_derecha;
    }

    public function setFlexibilidadRotadoresInternosFinalDerecha(?string $flexibilidad_rotadores_internos_final_derecha): self
    {
        $this->flexibilidad_rotadores_internos_final_derecha = $flexibilidad_rotadores_internos_final_derecha;

        return $this;
    }

    public function getFlexibilidadRotadoresInternosInicialIzquierda(): ?string
    {
        return $this->flexibilidad_rotadores_internos_inicial_izquierda;
    }

    public function setFlexibilidadRotadoresInternosInicialIzquierda(?string $flexibilidad_rotadores_internos_inicial_izquierda): self
    {
        $this->flexibilidad_rotadores_internos_inicial_izquierda = $flexibilidad_rotadores_internos_inicial_izquierda;

        return $this;
    }

    public function getFlexibilidadRotadoresInternosFinalIzquierda(): ?string
    {
        return $this->flexibilidad_rotadores_internos_final_izquierda;
    }

    public function setFlexibilidadRotadoresInternosFinalIzquierda(?string $flexibilidad_rotadores_internos_final_izquierda): self
    {
        $this->flexibilidad_rotadores_internos_final_izquierda = $flexibilidad_rotadores_internos_final_izquierda;

        return $this;
    }

    public function getFlexibilidadRotadoresExternosInicialDerecha(): ?string
    {
        return $this->flexibilidad_rotadores_externos_inicial_derecha;
    }

    public function setFlexibilidadRotadoresExternosInicialDerecha(?string $flexibilidad_rotadores_externos_inicial_derecha): self
    {
        $this->flexibilidad_rotadores_externos_inicial_derecha = $flexibilidad_rotadores_externos_inicial_derecha;

        return $this;
    }

    public function getFlexibilidadRotadoresExternosFinalDerecha(): ?string
    {
        return $this->flexibilidad_rotadores_externos_final_derecha;
    }

    public function setFlexibilidadRotadoresExternosFinalDerecha(?string $flexibilidad_rotadores_externos_final_derecha): self
    {
        $this->flexibilidad_rotadores_externos_final_derecha = $flexibilidad_rotadores_externos_final_derecha;

        return $this;
    }

    public function getFlexibilidadRotadoresExternosInicialIzquierda(): ?string
    {
        return $this->flexibilidad_rotadores_externos_inicial_izquierda;
    }

    public function setFlexibilidadRotadoresExternosInicialIzquierda(?string $flexibilidad_rotadores_externos_inicial_izquierda): self
    {
        $this->flexibilidad_rotadores_externos_inicial_izquierda = $flexibilidad_rotadores_externos_inicial_izquierda;

        return $this;
    }

    public function getFlexibilidadRotadoresExternosFinalIzquierda(): ?string
    {
        return $this->flexibilidad_rotadores_externos_final_izquierda;
    }

    public function setFlexibilidadRotadoresExternosFinalIzquierda(?string $flexibilidad_rotadores_externos_final_izquierda): self
    {
        $this->flexibilidad_rotadores_externos_final_izquierda = $flexibilidad_rotadores_externos_final_izquierda;

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

    public function getFlexibilidadCapsulaAnteriorInicialDerecha(): ?string
    {
        return $this->flexibilidad_capsula_anterior_inicial_derecha;
    }

    public function setFlexibilidadCapsulaAnteriorInicialDerecha(?string $flexibilidad_capsula_anterior_inicial_derecha): self
    {
        $this->flexibilidad_capsula_anterior_inicial_derecha = $flexibilidad_capsula_anterior_inicial_derecha;

        return $this;
    }

    public function getFlexibilidadCapsulaAnteriorFinalDerecha(): ?string
    {
        return $this->flexibilidad_capsula_anterior_final_derecha;
    }

    public function setFlexibilidadCapsulaAnteriorFinalDerecha(?string $flexibilidad_capsula_anterior_final_derecha): self
    {
        $this->flexibilidad_capsula_anterior_final_derecha = $flexibilidad_capsula_anterior_final_derecha;

        return $this;
    }

    public function getFlexibilidadCapsulaAnteriorInicialIzquierda(): ?string
    {
        return $this->flexibilidad_capsula_anterior_inicial_izquierda;
    }

    public function setFlexibilidadCapsulaAnteriorInicialIzquierda(?string $flexibilidad_capsula_anterior_inicial_izquierda): self
    {
        $this->flexibilidad_capsula_anterior_inicial_izquierda = $flexibilidad_capsula_anterior_inicial_izquierda;

        return $this;
    }

    public function getFlexibilidadCapsulaAnteriorFinalIzquierda(): ?string
    {
        return $this->flexibilidad_capsula_anterior_final_izquierda;
    }

    public function setFlexibilidadCapsulaAnteriorFinalIzquierda(?string $flexibilidad_capsula_anterior_final_izquierda): self
    {
        $this->flexibilidad_capsula_anterior_final_izquierda = $flexibilidad_capsula_anterior_final_izquierda;

        return $this;
    }

    public function getFlexibilidadCapsulaPosteriorInicialDerecha(): ?string
    {
        return $this->flexibilidad_capsula_posterior_inicial_derecha;
    }

    public function setFlexibilidadCapsulaPosteriorInicialDerecha(?string $flexibilidad_capsula_posterior_inicial_derecha): self
    {
        $this->flexibilidad_capsula_posterior_inicial_derecha = $flexibilidad_capsula_posterior_inicial_derecha;

        return $this;
    }

    public function getFlexibilidadCapsulaPosteriorFinalDerecha(): ?string
    {
        return $this->flexibilidad_capsula_posterior_final_derecha;
    }

    public function setFlexibilidadCapsulaPosteriorFinalDerecha(?string $flexibilidad_capsula_posterior_final_derecha): self
    {
        $this->flexibilidad_capsula_posterior_final_derecha = $flexibilidad_capsula_posterior_final_derecha;

        return $this;
    }

    public function getFlexibilidadCapsulaPosteriorInicialIzquierda(): ?string
    {
        return $this->flexibilidad_capsula_posterior_inicial_izquierda;
    }

    public function setFlexibilidadCapsulaPosteriorInicialIzquierda(?string $flexibilidad_capsula_posterior_inicial_izquierda): self
    {
        $this->flexibilidad_capsula_posterior_inicial_izquierda = $flexibilidad_capsula_posterior_inicial_izquierda;

        return $this;
    }

    public function getFlexibilidadCapsulaPosteriorFinalIzquierda(): ?string
    {
        return $this->flexibilidad_capsula_posterior_final_izquierda;
    }

    public function setFlexibilidadCapsulaPosteriorFinalIzquierda(?string $flexibilidad_capsula_posterior_final_izquierda): self
    {
        $this->flexibilidad_capsula_posterior_final_izquierda = $flexibilidad_capsula_posterior_final_izquierda;

        return $this;
    }

    public function getPrueEspeManguitoRotadorInicialDerecha(): ?string
    {
        return $this->prue_espe_manguito_rotador_inicial_derecha;
    }

    public function setPrueEspeManguitoRotadorInicialDerecha(?string $prue_espe_manguito_rotador_inicial_derecha): self
    {
        $this->prue_espe_manguito_rotador_inicial_derecha = $prue_espe_manguito_rotador_inicial_derecha;

        return $this;
    }

    public function getPrueEspeManguitoRotadorFinalDerecha(): ?string
    {
        return $this->prue_espe_manguito_rotador_final_derecha;
    }

    public function setPrueEspeManguitoRotadorFinalDerecha(?string $prue_espe_manguito_rotador_final_derecha): self
    {
        $this->prue_espe_manguito_rotador_final_derecha = $prue_espe_manguito_rotador_final_derecha;

        return $this;
    }

    public function getPrueEspeManguitoRotadorInicialIzquierda(): ?string
    {
        return $this->prue_espe_manguito_rotador_inicial_izquierda;
    }

    public function setPrueEspeManguitoRotadorInicialIzquierda(?string $prue_espe_manguito_rotador_inicial_izquierda): self
    {
        $this->prue_espe_manguito_rotador_inicial_izquierda = $prue_espe_manguito_rotador_inicial_izquierda;

        return $this;
    }

    public function getPrueEspeManguitoRotadorFinalIzquierda(): ?string
    {
        return $this->prue_espe_manguito_rotador_final_izquierda;
    }

    public function setPrueEspeManguitoRotadorFinalIzquierda(?string $prue_espe_manguito_rotador_final_izquierda): self
    {
        $this->prue_espe_manguito_rotador_final_izquierda = $prue_espe_manguito_rotador_final_izquierda;

        return $this;
    }

    public function getPrueEspeSupraespinosoInicialDerecha(): ?string
    {
        return $this->prue_espe_supraespinoso_inicial_derecha;
    }

    public function setPrueEspeSupraespinosoInicialDerecha(?string $prue_espe_supraespinoso_inicial_derecha): self
    {
        $this->prue_espe_supraespinoso_inicial_derecha = $prue_espe_supraespinoso_inicial_derecha;

        return $this;
    }

    public function getPrueEspeSupraespinosoFinalDerecha(): ?string
    {
        return $this->prue_espe_supraespinoso_final_derecha;
    }

    public function setPrueEspeSupraespinosoFinalDerecha(?string $prue_espe_supraespinoso_final_derecha): self
    {
        $this->prue_espe_supraespinoso_final_derecha = $prue_espe_supraespinoso_final_derecha;

        return $this;
    }

    public function getPrueEspeSupraespinosoInicialIzquierda(): ?string
    {
        return $this->prue_espe_supraespinoso_inicial_izquierda;
    }

    public function setPrueEspeSupraespinosoInicialIzquierda(?string $prue_espe_supraespinoso_inicial_izquierda): self
    {
        $this->prue_espe_supraespinoso_inicial_izquierda = $prue_espe_supraespinoso_inicial_izquierda;

        return $this;
    }

    public function getPrueEspeSupraespinosoFinalIzquierda(): ?string
    {
        return $this->prue_espe_supraespinoso_final_izquierda;
    }

    public function setPrueEspeSupraespinosoFinalIzquierda(?string $prue_espe_supraespinoso_final_izquierda): self
    {
        $this->prue_espe_supraespinoso_final_izquierda = $prue_espe_supraespinoso_final_izquierda;

        return $this;
    }

    public function getPrueEspeBrazoCaidoInicialDerecha(): ?string
    {
        return $this->prue_espe_brazo_caido_inicial_derecha;
    }

    public function setPrueEspeBrazoCaidoInicialDerecha(?string $prue_espe_brazo_caido_inicial_derecha): self
    {
        $this->prue_espe_brazo_caido_inicial_derecha = $prue_espe_brazo_caido_inicial_derecha;

        return $this;
    }

    public function getPrueEspeBrazoCaidoFinalDerecha(): ?string
    {
        return $this->prue_espe_brazo_caido_final_derecha;
    }

    public function setPrueEspeBrazoCaidoFinalDerecha(?string $prue_espe_brazo_caido_final_derecha): self
    {
        $this->prue_espe_brazo_caido_final_derecha = $prue_espe_brazo_caido_final_derecha;

        return $this;
    }

    public function getPrueEspeBrazoCaidoInicialIzquierda(): ?string
    {
        return $this->prue_espe_brazo_caido_inicial_izquierda;
    }

    public function setPrueEspeBrazoCaidoInicialIzquierda(?string $prue_espe_brazo_caido_inicial_izquierda): self
    {
        $this->prue_espe_brazo_caido_inicial_izquierda = $prue_espe_brazo_caido_inicial_izquierda;

        return $this;
    }

    public function getPrueEspeBrazoCaidoFinalIzquierda(): ?string
    {
        return $this->prue_espe_brazo_caido_final_izquierda;
    }

    public function setPrueEspeBrazoCaidoFinalIzquierda(?string $prue_espe_brazo_caido_final_izquierda): self
    {
        $this->prue_espe_brazo_caido_final_izquierda = $prue_espe_brazo_caido_final_izquierda;

        return $this;
    }

    public function getPinzamientoNeerInicialDerecha(): ?string
    {
        return $this->pinzamiento_neer_inicial_derecha;
    }

    public function setPinzamientoNeerInicialDerecha(?string $pinzamiento_neer_inicial_derecha): self
    {
        $this->pinzamiento_neer_inicial_derecha = $pinzamiento_neer_inicial_derecha;

        return $this;
    }

    public function getPinzamientoNeerFinalDerecha(): ?string
    {
        return $this->pinzamiento_neer_final_derecha;
    }

    public function setPinzamientoNeerFinalDerecha(?string $pinzamiento_neer_final_derecha): self
    {
        $this->pinzamiento_neer_final_derecha = $pinzamiento_neer_final_derecha;

        return $this;
    }

    public function getPinzamientoNeerInicialIzquierda(): ?string
    {
        return $this->pinzamiento_neer_inicial_izquierda;
    }

    public function setPinzamientoNeerInicialIzquierda(?string $pinzamiento_neer_inicial_izquierda): self
    {
        $this->pinzamiento_neer_inicial_izquierda = $pinzamiento_neer_inicial_izquierda;

        return $this;
    }

    public function getPinzamientoNeerFinalIzquierda(): ?string
    {
        return $this->pinzamiento_neer_final_izquierda;
    }

    public function setPinzamientoNeerFinalIzquierda(?string $pinzamiento_neer_final_izquierda): self
    {
        $this->pinzamiento_neer_final_izquierda = $pinzamiento_neer_final_izquierda;

        return $this;
    }

    public function getPinzamientoHawkinsInicialDerecha(): ?string
    {
        return $this->pinzamiento_hawkins_inicial_derecha;
    }

    public function setPinzamientoHawkinsInicialDerecha(string $pinzamiento_hawkins_inicial_derecha): self
    {
        $this->pinzamiento_hawkins_inicial_derecha = $pinzamiento_hawkins_inicial_derecha;

        return $this;
    }

    public function getPinzamientoHawkinsFinalDerecha(): ?string
    {
        return $this->pinzamiento_hawkins_final_derecha;
    }

    public function setPinzamientoHawkinsFinalDerecha(?string $pinzamiento_hawkins_final_derecha): self
    {
        $this->pinzamiento_hawkins_final_derecha = $pinzamiento_hawkins_final_derecha;

        return $this;
    }

    public function getPinzamientoHawkinsInicialIzquierda(): ?string
    {
        return $this->pinzamiento_hawkins_inicial_izquierda;
    }

    public function setPinzamientoHawkinsInicialIzquierda(?string $pinzamiento_hawkins_inicial_izquierda): self
    {
        $this->pinzamiento_hawkins_inicial_izquierda = $pinzamiento_hawkins_inicial_izquierda;

        return $this;
    }

    public function getPinzamientoHawkinsFinalIzquierda(): ?string
    {
        return $this->pinzamiento_hawkins_final_izquierda;
    }

    public function setPinzamientoHawkinsFinalIzquierda(?string $pinzamiento_hawkins_final_izquierda): self
    {
        $this->pinzamiento_hawkins_final_izquierda = $pinzamiento_hawkins_final_izquierda;

        return $this;
    }

    public function getTendBiciSpeedInicialDerecha(): ?string
    {
        return $this->tend_bici_speed_inicial_derecha;
    }

    public function setTendBiciSpeedInicialDerecha(?string $tend_bici_speed_inicial_derecha): self
    {
        $this->tend_bici_speed_inicial_derecha = $tend_bici_speed_inicial_derecha;

        return $this;
    }

    public function getTendBiciSpeedFinalDerecha(): ?string
    {
        return $this->tend_bici_speed_final_derecha;
    }

    public function setTendBiciSpeedFinalDerecha(?string $tend_bici_speed_final_derecha): self
    {
        $this->tend_bici_speed_final_derecha = $tend_bici_speed_final_derecha;

        return $this;
    }

    public function getTendBiciSpeedInicialIzquierda(): ?string
    {
        return $this->tend_bici_speed_inicial_izquierda;
    }

    public function setTendBiciSpeedInicialIzquierda(?string $tend_bici_speed_inicial_izquierda): self
    {
        $this->tend_bici_speed_inicial_izquierda = $tend_bici_speed_inicial_izquierda;

        return $this;
    }

    public function getTendBiciSpeedFinalIzquierda(): ?string
    {
        return $this->tend_bici_speed_final_izquierda;
    }

    public function setTendBiciSpeedFinalIzquierda(?string $tend_bici_speed_final_izquierda): self
    {
        $this->tend_bici_speed_final_izquierda = $tend_bici_speed_final_izquierda;

        return $this;
    }

    public function getInestabilidadSurcoInicialDerecha(): ?string
    {
        return $this->inestabilidad_surco_inicial_derecha;
    }

    public function setInestabilidadSurcoInicialDerecha(?string $inestabilidad_surco_inicial_derecha): self
    {
        $this->inestabilidad_surco_inicial_derecha = $inestabilidad_surco_inicial_derecha;

        return $this;
    }

    public function getInestabilidadSurcoFinalDerecha(): ?string
    {
        return $this->inestabilidad_surco_final_derecha;
    }

    public function setInestabilidadSurcoFinalDerecha(?string $inestabilidad_surco_final_derecha): self
    {
        $this->inestabilidad_surco_final_derecha = $inestabilidad_surco_final_derecha;

        return $this;
    }

    public function getInestabilidadSurcoInicialIzquierda(): ?string
    {
        return $this->inestabilidad_surco_inicial_izquierda;
    }

    public function setInestabilidadSurcoInicialIzquierda(?string $inestabilidad_surco_inicial_izquierda): self
    {
        $this->inestabilidad_surco_inicial_izquierda = $inestabilidad_surco_inicial_izquierda;

        return $this;
    }

    public function getInestabilidadSurcoFinalIzquierda(): ?string
    {
        return $this->inestabilidad_surco_final_izquierda;
    }

    public function setInestabilidadSurcoFinalIzquierda(?string $inestabilidad_surco_final_izquierda): self
    {
        $this->inestabilidad_surco_final_izquierda = $inestabilidad_surco_final_izquierda;

        return $this;
    }

    public function getInestabilidadCajonAnteriorInicialDerecha(): ?string
    {
        return $this->inestabilidad_cajon_anterior_inicial_derecha;
    }

    public function setInestabilidadCajonAnteriorInicialDerecha(?string $inestabilidad_cajon_anterior_inicial_derecha): self
    {
        $this->inestabilidad_cajon_anterior_inicial_derecha = $inestabilidad_cajon_anterior_inicial_derecha;

        return $this;
    }

    public function getInestabilidadCajonAnteriorFinalDerecha(): ?string
    {
        return $this->inestabilidad_cajon_anterior_final_derecha;
    }

    public function setInestabilidadCajonAnteriorFinalDerecha(?string $inestabilidad_cajon_anterior_final_derecha): self
    {
        $this->inestabilidad_cajon_anterior_final_derecha = $inestabilidad_cajon_anterior_final_derecha;

        return $this;
    }

    public function getInestabilidadCajonAnteriorInicialIzquierda(): ?string
    {
        return $this->inestabilidad_cajon_anterior_inicial_izquierda;
    }

    public function setInestabilidadCajonAnteriorInicialIzquierda(?string $inestabilidad_cajon_anterior_inicial_izquierda): self
    {
        $this->inestabilidad_cajon_anterior_inicial_izquierda = $inestabilidad_cajon_anterior_inicial_izquierda;

        return $this;
    }

    public function getInestabilidadCajonAnteriorFinalIzquierda(): ?string
    {
        return $this->inestabilidad_cajon_anterior_final_izquierda;
    }

    public function setInestabilidadCajonAnteriorFinalIzquierda(?string $inestabilidad_cajon_anterior_final_izquierda): self
    {
        $this->inestabilidad_cajon_anterior_final_izquierda = $inestabilidad_cajon_anterior_final_izquierda;

        return $this;
    }

    public function getInestabilidadCajonPosteriorInicialDerecha(): ?string
    {
        return $this->inestabilidad_cajon_posterior_inicial_derecha;
    }

    public function setInestabilidadCajonPosteriorInicialDerecha(?string $inestabilidad_cajon_posterior_inicial_derecha): self
    {
        $this->inestabilidad_cajon_posterior_inicial_derecha = $inestabilidad_cajon_posterior_inicial_derecha;

        return $this;
    }

    public function getInestabilidadCajonPosteriorFinalDerecha(): ?string
    {
        return $this->inestabilidad_cajon_posterior_final_derecha;
    }

    public function setInestabilidadCajonPosteriorFinalDerecha(?string $inestabilidad_cajon_posterior_final_derecha): self
    {
        $this->inestabilidad_cajon_posterior_final_derecha = $inestabilidad_cajon_posterior_final_derecha;

        return $this;
    }

    public function getInestabilidadCajonPosteriorInicialIzquierda(): ?string
    {
        return $this->inestabilidad_cajon_posterior_inicial_izquierda;
    }

    public function setInestabilidadCajonPosteriorInicialIzquierda(?string $inestabilidad_cajon_posterior_inicial_izquierda): self
    {
        $this->inestabilidad_cajon_posterior_inicial_izquierda = $inestabilidad_cajon_posterior_inicial_izquierda;

        return $this;
    }

    public function getInestabilidadCajonPosteriorFinalIzquierda(): ?string
    {
        return $this->inestabilidad_cajon_posterior_final_izquierda;
    }

    public function setInestabilidadCajonPosteriorFinalIzquierda(?string $inestabilidad_cajon_posterior_final_izquierda): self
    {
        $this->inestabilidad_cajon_posterior_final_izquierda = $inestabilidad_cajon_posterior_final_izquierda;

        return $this;
    }

    public function getSostRoosInicialDerecha(): ?string
    {
        return $this->sost_roos_inicial_derecha;
    }

    public function setSostRoosInicialDerecha(?string $sost_roos_inicial_derecha): self
    {
        $this->sost_roos_inicial_derecha = $sost_roos_inicial_derecha;

        return $this;
    }

    public function getSostRoosFinalDerecha(): ?string
    {
        return $this->sost_roos_final_derecha;
    }

    public function setSostRoosFinalDerecha(?string $sost_roos_final_derecha): self
    {
        $this->sost_roos_final_derecha = $sost_roos_final_derecha;

        return $this;
    }

    public function getSostRoosInicialIzquierda(): ?string
    {
        return $this->sost_roos_inicial_izquierda;
    }

    public function setSostRoosInicialIzquierda(?string $sost_roos_inicial_izquierda): self
    {
        $this->sost_roos_inicial_izquierda = $sost_roos_inicial_izquierda;

        return $this;
    }

    public function getSostRoosFinalIzquierda(): ?string
    {
        return $this->sost_roos_final_izquierda;
    }

    public function setSostRoosFinalIzquierda(?string $sost_roos_final_izquierda): self
    {
        $this->sost_roos_final_izquierda = $sost_roos_final_izquierda;

        return $this;
    }

    public function getPosturaAlineacionHombrosVi(): ?string
    {
        return $this->postura_alineacion_hombros_vi;
    }

    public function setPosturaAlineacionHombrosVi(?string $postura_alineacion_hombros_vi): self
    {
        $this->postura_alineacion_hombros_vi = $postura_alineacion_hombros_vi;

        return $this;
    }

    public function getPosturaAlineacionHombrosVf(): ?string
    {
        return $this->postura_alineacion_hombros_vf;
    }

    public function setPosturaAlineacionHombrosVf(?string $postura_alineacion_hombros_vf): self
    {
        $this->postura_alineacion_hombros_vf = $postura_alineacion_hombros_vf;

        return $this;
    }

    public function getPosturaAlineacionMamasTetillasVi(): ?string
    {
        return $this->postura_alineacion_mamas_tetillas_vi;
    }

    public function setPosturaAlineacionMamasTetillasVi(?string $postura_alineacion_mamas_tetillas_vi): self
    {
        $this->postura_alineacion_mamas_tetillas_vi = $postura_alineacion_mamas_tetillas_vi;

        return $this;
    }

    public function getPosturaAlineacionMamasTetillasVf(): ?string
    {
        return $this->postura_alineacion_mamas_tetillas_vf;
    }

    public function setPosturaAlineacionMamasTetillasVf(string $postura_alineacion_mamas_tetillas_vf): self
    {
        $this->postura_alineacion_mamas_tetillas_vf = $postura_alineacion_mamas_tetillas_vf;

        return $this;
    }

    public function getPosturaAlineacionEspinalIliacasVi(): ?string
    {
        return $this->postura_alineacion_espinal_iliacas_vi;
    }

    public function setPosturaAlineacionEspinalIliacasVi(?string $postura_alineacion_espinal_iliacas_vi): self
    {
        $this->postura_alineacion_espinal_iliacas_vi = $postura_alineacion_espinal_iliacas_vi;

        return $this;
    }

    public function getPosturaAlineacionEspinalIliacasVf(): ?string
    {
        return $this->postura_alineacion_espinal_iliacas_vf;
    }

    public function setPosturaAlineacionEspinalIliacasVf(?string $postura_alineacion_espinal_iliacas_vf): self
    {
        $this->postura_alineacion_espinal_iliacas_vf = $postura_alineacion_espinal_iliacas_vf;

        return $this;
    }

    public function getPosturaInclinacionTroncoVi(): ?string
    {
        return $this->postura_inclinacion_tronco_vi;
    }

    public function setPosturaInclinacionTroncoVi(?string $postura_inclinacion_tronco_vi): self
    {
        $this->postura_inclinacion_tronco_vi = $postura_inclinacion_tronco_vi;

        return $this;
    }

    public function getPosturaInclinacionTroncoVf(): ?string
    {
        return $this->postura_inclinacion_tronco_vf;
    }

    public function setPosturaInclinacionTroncoVf(?string $postura_inclinacion_tronco_vf): self
    {
        $this->postura_inclinacion_tronco_vf = $postura_inclinacion_tronco_vf;

        return $this;
    }

    public function getPosturaFlancosVi(): ?string
    {
        return $this->postura_flancos_vi;
    }

    public function setPosturaFlancosVi(?string $postura_flancos_vi): self
    {
        $this->postura_flancos_vi = $postura_flancos_vi;

        return $this;
    }

    public function getPosturaFlancosVf(): ?string
    {
        return $this->postura_flancos_vf;
    }

    public function setPosturaFlancosVf(?string $postura_flancos_vf): self
    {
        $this->postura_flancos_vf = $postura_flancos_vf;

        return $this;
    }

    public function getPosturaLordosisCervicalVi(): ?string
    {
        return $this->postura_lordosis_cervical_vi;
    }

    public function setPosturaLordosisCervicalVi(?string $postura_lordosis_cervical_vi): self
    {
        $this->postura_lordosis_cervical_vi = $postura_lordosis_cervical_vi;

        return $this;
    }

    public function getPosturaLordosisCervicalVf(): ?string
    {
        return $this->postura_lordosis_cervical_vf;
    }

    public function setPosturaLordosisCervicalVf(?string $postura_lordosis_cervical_vf): self
    {
        $this->postura_lordosis_cervical_vf = $postura_lordosis_cervical_vf;

        return $this;
    }

    public function getPosturaCifosisDorsalVi(): ?string
    {
        return $this->postura_cifosis_dorsal_vi;
    }

    public function setPosturaCifosisDorsalVi(?string $postura_cifosis_dorsal_vi): self
    {
        $this->postura_cifosis_dorsal_vi = $postura_cifosis_dorsal_vi;

        return $this;
    }

    public function getPosturaCifosisDorsalVf(): ?string
    {
        return $this->postura_cifosis_dorsal_vf;
    }

    public function setPosturaCifosisDorsalVf(?string $postura_cifosis_dorsal_vf): self
    {
        $this->postura_cifosis_dorsal_vf = $postura_cifosis_dorsal_vf;

        return $this;
    }

    public function getPosturaLordosisLumbarVi(): ?string
    {
        return $this->postura_lordosis_lumbar_vi;
    }

    public function setPosturaLordosisLumbarVi(?string $postura_lordosis_lumbar_vi): self
    {
        $this->postura_lordosis_lumbar_vi = $postura_lordosis_lumbar_vi;

        return $this;
    }

    public function getPosturaLordosisLumbarVf(): ?string
    {
        return $this->postura_lordosis_lumbar_vf;
    }

    public function setPosturaLordosisLumbarVf(?string $postura_lordosis_lumbar_vf): self
    {
        $this->postura_lordosis_lumbar_vf = $postura_lordosis_lumbar_vf;

        return $this;
    }

    public function getPosturaBasculacionPelvicaVi(): ?string
    {
        return $this->postura_basculacion_pelvica_vi;
    }

    public function setPosturaBasculacionPelvicaVi(string $postura_basculacion_pelvica_vi): self
    {
        $this->postura_basculacion_pelvica_vi = $postura_basculacion_pelvica_vi;

        return $this;
    }

    public function getPosturaBasculacionPelvicaVf(): ?string
    {
        return $this->postura_basculacion_pelvica_vf;
    }

    public function setPosturaBasculacionPelvicaVf(?string $postura_basculacion_pelvica_vf): self
    {
        $this->postura_basculacion_pelvica_vf = $postura_basculacion_pelvica_vf;

        return $this;
    }

    public function getPosturaEscoliosisVi(): ?string
    {
        return $this->postura_escoliosis_vi;
    }

    public function setPosturaEscoliosisVi(?string $postura_escoliosis_vi): self
    {
        $this->postura_escoliosis_vi = $postura_escoliosis_vi;

        return $this;
    }

    public function getPosturaEscoliosisVf(): ?string
    {
        return $this->postura_escoliosis_vf;
    }

    public function setPosturaEscoliosisVf(?string $postura_escoliosis_vf): self
    {
        $this->postura_escoliosis_vf = $postura_escoliosis_vf;

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

    public function getTecnFacilKabbat(): ?bool
    {
        return $this->tecn_facil_kabbat;
    }

    public function setTecnFacilKabbat(?bool $tecn_facil_kabbat): self
    {
        $this->tecn_facil_kabbat = $tecn_facil_kabbat;

        return $this;
    }

    public function getTecnFacilBobath(): ?bool
    {
        return $this->tecn_facil_bobath;
    }

    public function setTecnFacilBobath(?bool $tecn_facil_bobath): self
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

    public function getEjerciciosEstiramientos(): ?bool
    {
        return $this->ejercicios_estiramientos;
    }

    public function setEjerciciosEstiramientos(?bool $ejercicios_estiramientos): self
    {
        $this->ejercicios_estiramientos = $ejercicios_estiramientos;

        return $this;
    }

    public function getEjerciciosPendulares(): ?bool
    {
        return $this->ejercicios_pendulares;
    }

    public function setEjerciciosPendulares(?bool $ejercicios_pendulares): self
    {
        $this->ejercicios_pendulares = $ejercicios_pendulares;

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

    public function getOtrasKester(): ?bool
    {
        return $this->otras_kester;
    }

    public function setOtrasKester(?bool $otras_kester): self
    {
        $this->otras_kester = $otras_kester;

        return $this;
    }

    public function getOtrasCadenaCineticaCerrada(): ?bool
    {
        return $this->otras_cadena_cinetica_cerrada;
    }

    public function setOtrasCadenaCineticaCerrada(?bool $otras_cadena_cinetica_cerrada): self
    {
        $this->otras_cadena_cinetica_cerrada = $otras_cadena_cinetica_cerrada;

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
