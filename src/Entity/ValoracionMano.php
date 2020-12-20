<?php

namespace App\Entity;

use App\Repository\ValoracionManoRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ValoracionManoRepository::class)
 */
class ValoracionMano
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
    private $edema_trasarticular_muneca_inicial_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $edema_trasarticular_muneca_final_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $edema_trasarticular_muneca_inicial_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $edema_trasarticular_muneca_final_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $edema_trasarticular_codo_inicial_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $edema_trasarticular_codo_final_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $edema_trasarticular_codo_inicial_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $edema_trasarticular_codo_final_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $trofismo_encima_oleocranon_inicial_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $trofismo_encima_oleocranon_final_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $trofismo_encima_oleocranon_inicial_izquierda;

    /**
     * @ORM\Column(type="string", length=5, nullable=true)
     */
    private $trofismo_encima_oleocranon_final_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $trofismo_debajo_oleocranon_inicial_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $trofismo_debajo_oleocranon_final_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $trofismo_debajo_oleocranon_inicial_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $trofismo_debajo_oleocranon_final_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $mov_arti_mune_flexion_inicial_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $mov_arti_mune_flexion_final_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $mov_arti_mune_flexion_inicial_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $mov_arti_mune_flexion_final_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $mov_arti_mune_extension_inicial_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $mov_arti_mune_extension_final_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $mov_arti_mune_extension_inicial_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $mov_arti_mune_extension_final_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $mov_arti_mune_desv_radial_inicial_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $mov_arti_mune_desv_radial_final_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $mov_arti_mune_desv_radial_inicial_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $mov_arti_mune_desv_radial_final_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $mov_arti_mune_desv_cubital_inicial_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $mov_arti_mune_desv_cubital_final_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $mov_arti_mune_desv_cubital_inicial_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $mov_arti_mune_desv_cubital_final_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $mov_arti_pulgar_flexion_mcf_inicial_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $mov_arti_pulgar_flexion_mcf_final_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $mov_arti_pulgar_flexion_mcf_inicial_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $mov_arti_pulgar_flexion_mcf_final_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $mov_arti_pulgar_extension_mcf_inicial_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $mov_arti_pulgar_extension_mcf_final_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $mov_arti_pulgar_extension_mcf_inicial_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $mov_arti_pulgar_extension_mcf_final_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $mov_arti_pulgar_flexion_if_inicial_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $mov_arti_pulgar_flexion_if_final_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $mov_arti_pulgar_flexion_if_inicial_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $mov_arti_pulgar_flexion_if_final_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $mov_arti_pulgar_extension_if_inicial_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $mov_arti_pulgar_extension_if_final_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $mov_arti_pulgar_extension_if_inicial_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $mov_arti_pulgar_extension_if_final_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $mov_arti_pulgar_abduccion_70_inicial_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $mov_arti_pulgar_abduccion_70_final_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $mov_arti_pulgar_abduccion_70_inicial_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $mov_arti_pulgar_abduccion_70_final_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $mov_arti_pulgar_abduccion_0_inicial_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $mov_arti_pulgar_abduccion_0_final_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $mov_arti_pulgar_abduccion_0_inicial_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $mov_arti_pulgar_abduccion_0_final_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $mov_arti_pulgar_oposicion_inicial_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $mov_arti_pulgar_oposicion_final_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $mov_arti_pulgar_oposicion_inicial_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $mov_arti_pulgar_oposicion_final_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $eval_func_deslizamiento_tendinoso_vi_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $eval_func_deslizamiento_tendinoso_vf_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $eval_func_deslizamiento_tendinoso_vi_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $eval_func_deslizamiento_tendinoso_vf_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $eval_func_agarre_vi_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $eval_func_agarre_vf_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $eval_func_agarre_vi_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $eval_func_agarre_vf_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $eval_func_mano_garra_vi_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $eval_func_mano_garra_vf_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $eval_func_mano_garra_vi_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $eval_func_mano_garra_vf_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $eval_func_puno_cerrado_vi_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $eval_func_puno_cerrado_vf_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $eval_func_puno_cerrado_vi_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $eval_func_puno_cerrado_vf_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $eval_func_oposicion_pulgar_indice_vi_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $eval_func_oposicion_pulgar_indice_vf_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $eval_func_oposicion_pulgar_indice_vi_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $eval_func_oposicion_pulgar_indice_vf_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $eval_func_oposicion_pulgar_medio_vi_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $eval_func_oposicion_pulgar_medio_vf_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $eval_func_oposicion_pulgar_medio_vi_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $eval_func_oposicion_pulgar_medio_vf_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $eval_func_oposicion_pulgar_anular_vi_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $eval_func_oposicion_pulgar_anular_vf_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $eval_func_oposicion_pulgar_anular_vi_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $eval_func_oposicion_pulgar_anular_vf_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $eval_func_oposicion_pulgar_menique_vi_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $eval_func_oposicion_pulgar_menique_vf_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $eval_func_oposicion_pulgar_menique_vi_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $eval_func_oposicion_pulgar_menique_vf_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $eval_func_prueba_o_vi_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $eval_func_prueba_o_vf_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $eval_func_prueba_o_vi_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $eval_func_prueba_o_vf_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $mov_arti_dedos_flexion_mcf_inicial_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $mov_arti_dedos_flexion_mcf_final_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $mov_arti_dedos_flexion_mcf_inicial_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $mov_arti_dedos_flexion_mcf_final_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $mov_arti_dedos_flexion_ifp_inicial_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $mov_arti_dedos_flexion_ifp_final_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $mov_arti_dedos_flexion_ifp_inicial_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $mov_arti_dedos_flexion_ifp_final_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $mov_arti_dedos_flexion_ifd_inicial_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $mov_arti_dedos_flexion_ifd_final_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $mov_arti_dedos_flexion_ifd_inicial_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $mov_arti_dedos_flexion_ifd_final_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $mov_arti_dedos_extension_mcf_inicial_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $mov_arti_dedos_extension_mcf_final_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $mov_arti_dedos_extension_mcf_inicial_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $mov_arti_dedos_extension_mcf_final_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $mov_arti_dedos_extension_ifp_inicial_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $mov_arti_dedos_extension_ifp_final_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $mov_arti_dedos_extension_ifp_inicial_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $mov_arti_dedos_extension_ifp_final_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $mov_arti_dedos_extension_ifd_inicial_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $mov_arti_dedos_extension_ifd_final_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $mov_arti_dedos_extension_ifd_inicial_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $mov_arti_dedos_extension_ifd_final_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $mov_arti_dedos_abduccion_30_inicial_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $mov_arti_dedos_abduccion_30_final_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $mov_arti_dedos_abduccion_30_inicial_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $mov_arti_dedos_abduccion_30_final_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $mov_arti_dedos_abduccion_30_0_inicial_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $mov_arti_dedos_abduccion_30_0_final_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $mov_arti_dedos_abduccion_30_0_inicial_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $mov_arti_dedos_abduccion_30_0_final_izquierda;

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
    private $fuer_musc_palmar_mayor_inicial_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $fuer_musc_palmar_mayor_final_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $fuer_musc_palmar_mayor_inicial_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $fuer_musc_palmar_mayor_final_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $fuer_musc_radiales_inicial_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $fuer_musc_radiales_final_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $fuer_musc_radiales_inicial_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $fuer_musc_radiales_final_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $fuer_musc_cubital_anterior_inicial_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $fuer_musc_cubital_anterior_final_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $fuer_musc_cubital_anterior_inicial_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $fuer_musc_cubital_anterior_final_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $fuer_musc_cubital_posterior_inicial_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $fuer_musc_cubital_posterior_final_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $fuer_musc_cubital_posterior_inicial_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $fuer_musc_cubital_posterior_final_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $pulgar_flexor_corto_inicial_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $pulgar_flexor_corto_final_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $pulgar_flexor_corto_inicial_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $pulgar_flexor_corto_final_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $pulgar_flexor_largo_inicial_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $pulgar_flexor_largo_final_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $pulgar_flexor_largo_inicial_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $pulgar_flexor_largo_final_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $pulgar_extensor_corto_inicial_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $pulgar_extensor_corto_final_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $pulgar_extensor_corto_inicial_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $pulgar_extensor_corto_final_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $pulgar_extensor_largo_inicial_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $pulgar_extensor_largo_final_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $pulgar_extensor_largo_inicial_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $pulgar_extensor_largo_final_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $pulgar_abductores_inicial_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $pulgar_abductores_final_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $pulgar_abductores_inicial_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $pulgar_abductores_final_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $pulgar_aductor_inicial_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $pulgar_aductor_final_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $pulgar_aductor_inicial_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $pulgar_aductor_final_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $pulgar_oponente_inicial_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $pulgar_oponente_final_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $pulgar_oponente_inicial_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $pulgar_oponente_final_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $dedos_lumbricales_inicial_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $dedos_lumbricales_final_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $dedos_lumbricales_inicial_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $dedos_lumbricales_final_izquierda;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $dedos_flexor_profundo_inicial_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $dedos_flexor_profundo_final_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $dedos_flexor_profundo_inicial_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $dedos_flexor_profundo_final_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $dedos_flexor_superficial_inicial_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $dedos_flexor_superficial_final_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $dedos_flexor_superficial_inicial_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $dedos_flexor_superficial_final_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $dedos_extensor_comun_inicial_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $dedos_extensor_comun_final_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $dedos_extensor_comun_inicial_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $dedos_extensor_comun_final_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $dedos_interoseos_dorsales_inicial_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $dedos_interoseos_dorsales_final_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $dedos_interoseos_dorsales_inicial_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $dedos_interoseos_dorsales_final_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $dedos_interoseos_palmares_inicial_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $dedos_interoseos_palmares_final_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $dedos_interoseos_palmares_inicial_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $dedos_interoseos_palmares_final_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $flexibilidad_flexores_muneca_inicial_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $flexibilidad_flexores_muneca_final_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $flexibilidad_flexores_muneca_inicial_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $flexibilidad_flexores_muneca_final_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $flexibilidad_extensores_muneca_inicial_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $flexibilidad_extensores_muneca_final_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $flexibilidad_extensores_muneca_inicial_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $flexibilidad_extensores_muneca_final_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $flexibilidad_intrinsecos_mano_inicial_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $flexibilidad_intrinsecos_mano_final_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $flexibilidad_intrinsecos_mano_inicial_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $flexibilidad_intrinsecos_mano_final_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $prue_espec_tinel_mediano_inicial_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $prue_espec_tinel_mediano_final_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $prue_espec_tinel_mediano_inicial_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $prue_espec_tinel_mediano_final_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $prue_espec_phalen_inicial_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $prue_espec_phalen_final_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $prue_espec_phalen_inicial_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $prue_espec_phalen_final_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $prue_espec_filkestein_inicial_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $prue_espec_filkestein_final_derecha;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $prue_espec_filkestein_inicial_izquierda;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $prue_espec_filkestein_final_izquierda;

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
    private $tecn_facil_bobath;

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

    public function getEdemaTrasarticularMunecaInicialDerecha(): ?string
    {
        return $this->edema_trasarticular_muneca_inicial_derecha;
    }

    public function setEdemaTrasarticularMunecaInicialDerecha(?string $edema_trasarticular_muneca_inicial_derecha): self
    {
        $this->edema_trasarticular_muneca_inicial_derecha = $edema_trasarticular_muneca_inicial_derecha;

        return $this;
    }

    public function getEdemaTrasarticularMunecaFinalDerecha(): ?string
    {
        return $this->edema_trasarticular_muneca_final_derecha;
    }

    public function setEdemaTrasarticularMunecaFinalDerecha(?string $edema_trasarticular_muneca_final_derecha): self
    {
        $this->edema_trasarticular_muneca_final_derecha = $edema_trasarticular_muneca_final_derecha;

        return $this;
    }

    public function getEdemaTrasarticularMunecaInicialIzquierda(): ?string
    {
        return $this->edema_trasarticular_muneca_inicial_izquierda;
    }

    public function setEdemaTrasarticularMunecaInicialIzquierda(?string $edema_trasarticular_muneca_inicial_izquierda): self
    {
        $this->edema_trasarticular_muneca_inicial_izquierda = $edema_trasarticular_muneca_inicial_izquierda;

        return $this;
    }

    public function getEdemaTrasarticularMunecaFinalIzquierda(): ?string
    {
        return $this->edema_trasarticular_muneca_final_izquierda;
    }

    public function setEdemaTrasarticularMunecaFinalIzquierda(?string $edema_trasarticular_muneca_final_izquierda): self
    {
        $this->edema_trasarticular_muneca_final_izquierda = $edema_trasarticular_muneca_final_izquierda;

        return $this;
    }

    public function getEdemaTrasarticularCodoInicialDerecha(): ?string
    {
        return $this->edema_trasarticular_codo_inicial_derecha;
    }

    public function setEdemaTrasarticularCodoInicialDerecha(?string $edema_trasarticular_codo_inicial_derecha): self
    {
        $this->edema_trasarticular_codo_inicial_derecha = $edema_trasarticular_codo_inicial_derecha;

        return $this;
    }

    public function getEdemaTrasarticularCodoFinalDerecha(): ?string
    {
        return $this->edema_trasarticular_codo_final_derecha;
    }

    public function setEdemaTrasarticularCodoFinalDerecha(?string $edema_trasarticular_codo_final_derecha): self
    {
        $this->edema_trasarticular_codo_final_derecha = $edema_trasarticular_codo_final_derecha;

        return $this;
    }

    public function getEdemaTrasarticularCodoInicialIzquierda(): ?string
    {
        return $this->edema_trasarticular_codo_inicial_izquierda;
    }

    public function setEdemaTrasarticularCodoInicialIzquierda(?string $edema_trasarticular_codo_inicial_izquierda): self
    {
        $this->edema_trasarticular_codo_inicial_izquierda = $edema_trasarticular_codo_inicial_izquierda;

        return $this;
    }

    public function getEdemaTrasarticularCodoFinalIzquierda(): ?string
    {
        return $this->edema_trasarticular_codo_final_izquierda;
    }

    public function setEdemaTrasarticularCodoFinalIzquierda(?string $edema_trasarticular_codo_final_izquierda): self
    {
        $this->edema_trasarticular_codo_final_izquierda = $edema_trasarticular_codo_final_izquierda;

        return $this;
    }

    public function getTrofismoEncimaOleocranonInicialDerecha(): ?string
    {
        return $this->trofismo_encima_oleocranon_inicial_derecha;
    }

    public function setTrofismoEncimaOleocranonInicialDerecha(?string $trofismo_encima_oleocranon_inicial_derecha): self
    {
        $this->trofismo_encima_oleocranon_inicial_derecha = $trofismo_encima_oleocranon_inicial_derecha;

        return $this;
    }

    public function getTrofismoEncimaOleocranonFinalDerecha(): ?string
    {
        return $this->trofismo_encima_oleocranon_final_derecha;
    }

    public function setTrofismoEncimaOleocranonFinalDerecha(?string $trofismo_encima_oleocranon_final_derecha): self
    {
        $this->trofismo_encima_oleocranon_final_derecha = $trofismo_encima_oleocranon_final_derecha;

        return $this;
    }

    public function getTrofismoEncimaOleocranonInicialIzquierda(): ?string
    {
        return $this->trofismo_encima_oleocranon_inicial_izquierda;
    }

    public function setTrofismoEncimaOleocranonInicialIzquierda(?string $trofismo_encima_oleocranon_inicial_izquierda): self
    {
        $this->trofismo_encima_oleocranon_inicial_izquierda = $trofismo_encima_oleocranon_inicial_izquierda;

        return $this;
    }

    public function getTrofismoEncimaOleocranonFinalIzquierda(): ?string
    {
        return $this->trofismo_encima_oleocranon_final_izquierda;
    }

    public function setTrofismoEncimaOleocranonFinalIzquierda(?string $trofismo_encima_oleocranon_final_izquierda): self
    {
        $this->trofismo_encima_oleocranon_final_izquierda = $trofismo_encima_oleocranon_final_izquierda;

        return $this;
    }

    public function getTrofismoDebajoOleocranonInicialDerecha(): ?string
    {
        return $this->trofismo_debajo_oleocranon_inicial_derecha;
    }

    public function setTrofismoDebajoOleocranonInicialDerecha(?string $trofismo_debajo_oleocranon_inicial_derecha): self
    {
        $this->trofismo_debajo_oleocranon_inicial_derecha = $trofismo_debajo_oleocranon_inicial_derecha;

        return $this;
    }

    public function getTrofismoDebajoOleocranonFinalDerecha(): ?string
    {
        return $this->trofismo_debajo_oleocranon_final_derecha;
    }

    public function setTrofismoDebajoOleocranonFinalDerecha(?string $trofismo_debajo_oleocranon_final_derecha): self
    {
        $this->trofismo_debajo_oleocranon_final_derecha = $trofismo_debajo_oleocranon_final_derecha;

        return $this;
    }

    public function getTrofismoDebajoOleocranonInicialIzquierda(): ?string
    {
        return $this->trofismo_debajo_oleocranon_inicial_izquierda;
    }

    public function setTrofismoDebajoOleocranonInicialIzquierda(?string $trofismo_debajo_oleocranon_inicial_izquierda): self
    {
        $this->trofismo_debajo_oleocranon_inicial_izquierda = $trofismo_debajo_oleocranon_inicial_izquierda;

        return $this;
    }

    public function getTrofismoDebajoOleocranonFinalIzquierda(): ?string
    {
        return $this->trofismo_debajo_oleocranon_final_izquierda;
    }

    public function setTrofismoDebajoOleocranonFinalIzquierda(?string $trofismo_debajo_oleocranon_final_izquierda): self
    {
        $this->trofismo_debajo_oleocranon_final_izquierda = $trofismo_debajo_oleocranon_final_izquierda;

        return $this;
    }

    public function getMovArtiMuneFlexionInicialDerecha(): ?string
    {
        return $this->mov_arti_mune_flexion_inicial_derecha;
    }

    public function setMovArtiMuneFlexionInicialDerecha(?string $mov_arti_mune_flexion_inicial_derecha): self
    {
        $this->mov_arti_mune_flexion_inicial_derecha = $mov_arti_mune_flexion_inicial_derecha;

        return $this;
    }

    public function getMovArtiMuneFlexionFinalDerecha(): ?string
    {
        return $this->mov_arti_mune_flexion_final_derecha;
    }

    public function setMovArtiMuneFlexionFinalDerecha(?string $mov_arti_mune_flexion_final_derecha): self
    {
        $this->mov_arti_mune_flexion_final_derecha = $mov_arti_mune_flexion_final_derecha;

        return $this;
    }

    public function getMovArtiMuneFlexionInicialIzquierda(): ?string
    {
        return $this->mov_arti_mune_flexion_inicial_izquierda;
    }

    public function setMovArtiMuneFlexionInicialIzquierda(?string $mov_arti_mune_flexion_inicial_izquierda): self
    {
        $this->mov_arti_mune_flexion_inicial_izquierda = $mov_arti_mune_flexion_inicial_izquierda;

        return $this;
    }

    public function getMovArtiMuneFlexionFinalIzquierda(): ?string
    {
        return $this->mov_arti_mune_flexion_final_izquierda;
    }

    public function setMovArtiMuneFlexionFinalIzquierda(?string $mov_arti_mune_flexion_final_izquierda): self
    {
        $this->mov_arti_mune_flexion_final_izquierda = $mov_arti_mune_flexion_final_izquierda;

        return $this;
    }

    public function getMovArtiMuneExtensionInicialDerecha(): ?string
    {
        return $this->mov_arti_mune_extension_inicial_derecha;
    }

    public function setMovArtiMuneExtensionInicialDerecha(?string $mov_arti_mune_extension_inicial_derecha): self
    {
        $this->mov_arti_mune_extension_inicial_derecha = $mov_arti_mune_extension_inicial_derecha;

        return $this;
    }

    public function getMovArtiMuneExtensionFinalDerecha(): ?string
    {
        return $this->mov_arti_mune_extension_final_derecha;
    }

    public function setMovArtiMuneExtensionFinalDerecha(?string $mov_arti_mune_extension_final_derecha): self
    {
        $this->mov_arti_mune_extension_final_derecha = $mov_arti_mune_extension_final_derecha;

        return $this;
    }

    public function getMovArtiMuneExtensionInicialIzquierda(): ?string
    {
        return $this->mov_arti_mune_extension_inicial_izquierda;
    }

    public function setMovArtiMuneExtensionInicialIzquierda(?string $mov_arti_mune_extension_inicial_izquierda): self
    {
        $this->mov_arti_mune_extension_inicial_izquierda = $mov_arti_mune_extension_inicial_izquierda;

        return $this;
    }

    public function getMovArtiMuneExtensionFinalIzquierda(): ?string
    {
        return $this->mov_arti_mune_extension_final_izquierda;
    }

    public function setMovArtiMuneExtensionFinalIzquierda(?string $mov_arti_mune_extension_final_izquierda): self
    {
        $this->mov_arti_mune_extension_final_izquierda = $mov_arti_mune_extension_final_izquierda;

        return $this;
    }

    public function getMovArtiMuneDesvRadialInicialDerecha(): ?string
    {
        return $this->mov_arti_mune_desv_radial_inicial_derecha;
    }

    public function setMovArtiMuneDesvRadialInicialDerecha(?string $mov_arti_mune_desv_radial_inicial_derecha): self
    {
        $this->mov_arti_mune_desv_radial_inicial_derecha = $mov_arti_mune_desv_radial_inicial_derecha;

        return $this;
    }

    public function getMovArtiMuneDesvRadialFinalDerecha(): ?string
    {
        return $this->mov_arti_mune_desv_radial_final_derecha;
    }

    public function setMovArtiMuneDesvRadialFinalDerecha(?string $mov_arti_mune_desv_radial_final_derecha): self
    {
        $this->mov_arti_mune_desv_radial_final_derecha = $mov_arti_mune_desv_radial_final_derecha;

        return $this;
    }

    public function getMovArtiMuneDesvRadialInicialIzquierda(): ?string
    {
        return $this->mov_arti_mune_desv_radial_inicial_izquierda;
    }

    public function setMovArtiMuneDesvRadialInicialIzquierda(?string $mov_arti_mune_desv_radial_inicial_izquierda): self
    {
        $this->mov_arti_mune_desv_radial_inicial_izquierda = $mov_arti_mune_desv_radial_inicial_izquierda;

        return $this;
    }

    public function getMovArtiMuneDesvRadialFinalIzquierda(): ?string
    {
        return $this->mov_arti_mune_desv_radial_final_izquierda;
    }

    public function setMovArtiMuneDesvRadialFinalIzquierda(?string $mov_arti_mune_desv_radial_final_izquierda): self
    {
        $this->mov_arti_mune_desv_radial_final_izquierda = $mov_arti_mune_desv_radial_final_izquierda;

        return $this;
    }

    public function getMovArtiMuneDesvCubitalInicialDerecha(): ?string
    {
        return $this->mov_arti_mune_desv_cubital_inicial_derecha;
    }

    public function setMovArtiMuneDesvCubitalInicialDerecha(?string $mov_arti_mune_desv_cubital_inicial_derecha): self
    {
        $this->mov_arti_mune_desv_cubital_inicial_derecha = $mov_arti_mune_desv_cubital_inicial_derecha;

        return $this;
    }

    public function getMovArtiMuneDesvCubitalFinalDerecha(): ?string
    {
        return $this->mov_arti_mune_desv_cubital_final_derecha;
    }

    public function setMovArtiMuneDesvCubitalFinalDerecha(?string $mov_arti_mune_desv_cubital_final_derecha): self
    {
        $this->mov_arti_mune_desv_cubital_final_derecha = $mov_arti_mune_desv_cubital_final_derecha;

        return $this;
    }

    public function getMovArtiMuneDesvCubitalInicialIzquierda(): ?string
    {
        return $this->mov_arti_mune_desv_cubital_inicial_izquierda;
    }

    public function setMovArtiMuneDesvCubitalInicialIzquierda(?string $mov_arti_mune_desv_cubital_inicial_izquierda): self
    {
        $this->mov_arti_mune_desv_cubital_inicial_izquierda = $mov_arti_mune_desv_cubital_inicial_izquierda;

        return $this;
    }

    public function getMovArtiMuneDesvCubitalFinalIzquierda(): ?string
    {
        return $this->mov_arti_mune_desv_cubital_final_izquierda;
    }

    public function setMovArtiMuneDesvCubitalFinalIzquierda(?string $mov_arti_mune_desv_cubital_final_izquierda): self
    {
        $this->mov_arti_mune_desv_cubital_final_izquierda = $mov_arti_mune_desv_cubital_final_izquierda;

        return $this;
    }

    public function getMovArtiPulgarFlexionMcfInicialDerecha(): ?string
    {
        return $this->mov_arti_pulgar_flexion_mcf_inicial_derecha;
    }

    public function setMovArtiPulgarFlexionMcfInicialDerecha(?string $mov_arti_pulgar_flexion_mcf_inicial_derecha): self
    {
        $this->mov_arti_pulgar_flexion_mcf_inicial_derecha = $mov_arti_pulgar_flexion_mcf_inicial_derecha;

        return $this;
    }

    public function getMovArtiPulgarFlexionMcfFinalDerecha(): ?string
    {
        return $this->mov_arti_pulgar_flexion_mcf_final_derecha;
    }

    public function setMovArtiPulgarFlexionMcfFinalDerecha(?string $mov_arti_pulgar_flexion_mcf_final_derecha): self
    {
        $this->mov_arti_pulgar_flexion_mcf_final_derecha = $mov_arti_pulgar_flexion_mcf_final_derecha;

        return $this;
    }

    public function getMovArtiPulgarFlexionMcfInicialIzquierda(): ?string
    {
        return $this->mov_arti_pulgar_flexion_mcf_inicial_izquierda;
    }

    public function setMovArtiPulgarFlexionMcfInicialIzquierda(?string $mov_arti_pulgar_flexion_mcf_inicial_izquierda): self
    {
        $this->mov_arti_pulgar_flexion_mcf_inicial_izquierda = $mov_arti_pulgar_flexion_mcf_inicial_izquierda;

        return $this;
    }

    public function getMovArtiPulgarFlexionMcfFinalIzquierda(): ?string
    {
        return $this->mov_arti_pulgar_flexion_mcf_final_izquierda;
    }

    public function setMovArtiPulgarFlexionMcfFinalIzquierda(?string $mov_arti_pulgar_flexion_mcf_final_izquierda): self
    {
        $this->mov_arti_pulgar_flexion_mcf_final_izquierda = $mov_arti_pulgar_flexion_mcf_final_izquierda;

        return $this;
    }

    public function getMovArtiPulgarExtensionMcfInicialDerecha(): ?string
    {
        return $this->mov_arti_pulgar_extension_mcf_inicial_derecha;
    }

    public function setMovArtiPulgarExtensionMcfInicialDerecha(?string $mov_arti_pulgar_extension_mcf_inicial_derecha): self
    {
        $this->mov_arti_pulgar_extension_mcf_inicial_derecha = $mov_arti_pulgar_extension_mcf_inicial_derecha;

        return $this;
    }

    public function getMovArtiPulgarExtensionMcfFinalDerecha(): ?string
    {
        return $this->mov_arti_pulgar_extension_mcf_final_derecha;
    }

    public function setMovArtiPulgarExtensionMcfFinalDerecha(?string $mov_arti_pulgar_extension_mcf_final_derecha): self
    {
        $this->mov_arti_pulgar_extension_mcf_final_derecha = $mov_arti_pulgar_extension_mcf_final_derecha;

        return $this;
    }

    public function getMovArtiPulgarExtensionMcfInicialIzquierda(): ?string
    {
        return $this->mov_arti_pulgar_extension_mcf_inicial_izquierda;
    }

    public function setMovArtiPulgarExtensionMcfInicialIzquierda(?string $mov_arti_pulgar_extension_mcf_inicial_izquierda): self
    {
        $this->mov_arti_pulgar_extension_mcf_inicial_izquierda = $mov_arti_pulgar_extension_mcf_inicial_izquierda;

        return $this;
    }

    public function getMovArtiPulgarExtensionMcfFinalIzquierda(): ?string
    {
        return $this->mov_arti_pulgar_extension_mcf_final_izquierda;
    }

    public function setMovArtiPulgarExtensionMcfFinalIzquierda(?string $mov_arti_pulgar_extension_mcf_final_izquierda): self
    {
        $this->mov_arti_pulgar_extension_mcf_final_izquierda = $mov_arti_pulgar_extension_mcf_final_izquierda;

        return $this;
    }

    public function getMovArtiPulgarFlexionIfInicialDerecha(): ?string
    {
        return $this->mov_arti_pulgar_flexion_if_inicial_derecha;
    }

    public function setMovArtiPulgarFlexionIfInicialDerecha(?string $mov_arti_pulgar_flexion_if_inicial_derecha): self
    {
        $this->mov_arti_pulgar_flexion_if_inicial_derecha = $mov_arti_pulgar_flexion_if_inicial_derecha;

        return $this;
    }

    public function getMovArtiPulgarFlexionIfFinalDerecha(): ?string
    {
        return $this->mov_arti_pulgar_flexion_if_final_derecha;
    }

    public function setMovArtiPulgarFlexionIfFinalDerecha(?string $mov_arti_pulgar_flexion_if_final_derecha): self
    {
        $this->mov_arti_pulgar_flexion_if_final_derecha = $mov_arti_pulgar_flexion_if_final_derecha;

        return $this;
    }

    public function getMovArtiPulgarFlexionIfInicialIzquierda(): ?string
    {
        return $this->mov_arti_pulgar_flexion_if_inicial_izquierda;
    }

    public function setMovArtiPulgarFlexionIfInicialIzquierda(?string $mov_arti_pulgar_flexion_if_inicial_izquierda): self
    {
        $this->mov_arti_pulgar_flexion_if_inicial_izquierda = $mov_arti_pulgar_flexion_if_inicial_izquierda;

        return $this;
    }

    public function getMovArtiPulgarFlexionIfFinalIzquierda(): ?string
    {
        return $this->mov_arti_pulgar_flexion_if_final_izquierda;
    }

    public function setMovArtiPulgarFlexionIfFinalIzquierda(?string $mov_arti_pulgar_flexion_if_final_izquierda): self
    {
        $this->mov_arti_pulgar_flexion_if_final_izquierda = $mov_arti_pulgar_flexion_if_final_izquierda;

        return $this;
    }

    public function getMovArtiPulgarExtensionIfInicialDerecha(): ?string
    {
        return $this->mov_arti_pulgar_extension_if_inicial_derecha;
    }

    public function setMovArtiPulgarExtensionIfInicialDerecha(?string $mov_arti_pulgar_extension_if_inicial_derecha): self
    {
        $this->mov_arti_pulgar_extension_if_inicial_derecha = $mov_arti_pulgar_extension_if_inicial_derecha;

        return $this;
    }

    public function getMovArtiPulgarExtensionIfFinalDerecha(): ?string
    {
        return $this->mov_arti_pulgar_extension_if_final_derecha;
    }

    public function setMovArtiPulgarExtensionIfFinalDerecha(?string $mov_arti_pulgar_extension_if_final_derecha): self
    {
        $this->mov_arti_pulgar_extension_if_final_derecha = $mov_arti_pulgar_extension_if_final_derecha;

        return $this;
    }

    public function getMovArtiPulgarExtensionIfInicialIzquierda(): ?string
    {
        return $this->mov_arti_pulgar_extension_if_inicial_izquierda;
    }

    public function setMovArtiPulgarExtensionIfInicialIzquierda(?string $mov_arti_pulgar_extension_if_inicial_izquierda): self
    {
        $this->mov_arti_pulgar_extension_if_inicial_izquierda = $mov_arti_pulgar_extension_if_inicial_izquierda;

        return $this;
    }

    public function getMovArtiPulgarExtensionIfFinalIzquierda(): ?string
    {
        return $this->mov_arti_pulgar_extension_if_final_izquierda;
    }

    public function setMovArtiPulgarExtensionIfFinalIzquierda(?string $mov_arti_pulgar_extension_if_final_izquierda): self
    {
        $this->mov_arti_pulgar_extension_if_final_izquierda = $mov_arti_pulgar_extension_if_final_izquierda;

        return $this;
    }

    public function getMovArtiPulgarAbduccion70InicialDerecha(): ?string
    {
        return $this->mov_arti_pulgar_abduccion_70_inicial_derecha;
    }

    public function setMovArtiPulgarAbduccion70InicialDerecha(?string $mov_arti_pulgar_abduccion_70_inicial_derecha): self
    {
        $this->mov_arti_pulgar_abduccion_70_inicial_derecha = $mov_arti_pulgar_abduccion_70_inicial_derecha;

        return $this;
    }

    public function getMovArtiPulgarAbduccion70FinalDerecha(): ?string
    {
        return $this->mov_arti_pulgar_abduccion_70_final_derecha;
    }

    public function setMovArtiPulgarAbduccion70FinalDerecha(?string $mov_arti_pulgar_abduccion_70_final_derecha): self
    {
        $this->mov_arti_pulgar_abduccion_70_final_derecha = $mov_arti_pulgar_abduccion_70_final_derecha;

        return $this;
    }

    public function getMovArtiPulgarAbduccion70InicialIzquierda(): ?string
    {
        return $this->mov_arti_pulgar_abduccion_70_inicial_izquierda;
    }

    public function setMovArtiPulgarAbduccion70InicialIzquierda(?string $mov_arti_pulgar_abduccion_70_inicial_izquierda): self
    {
        $this->mov_arti_pulgar_abduccion_70_inicial_izquierda = $mov_arti_pulgar_abduccion_70_inicial_izquierda;

        return $this;
    }

    public function getMovArtiPulgarAbduccion70FinalIzquierda(): ?string
    {
        return $this->mov_arti_pulgar_abduccion_70_final_izquierda;
    }

    public function setMovArtiPulgarAbduccion70FinalIzquierda(?string $mov_arti_pulgar_abduccion_70_final_izquierda): self
    {
        $this->mov_arti_pulgar_abduccion_70_final_izquierda = $mov_arti_pulgar_abduccion_70_final_izquierda;

        return $this;
    }

    public function getMovArtiPulgarAbduccion0InicialDerecha(): ?string
    {
        return $this->mov_arti_pulgar_abduccion_0_inicial_derecha;
    }

    public function setMovArtiPulgarAbduccion0InicialDerecha(?string $mov_arti_pulgar_abduccion_0_inicial_derecha): self
    {
        $this->mov_arti_pulgar_abduccion_0_inicial_derecha = $mov_arti_pulgar_abduccion_0_inicial_derecha;

        return $this;
    }

    public function getMovArtiPulgarAbduccion0FinalDerecha(): ?string
    {
        return $this->mov_arti_pulgar_abduccion_0_final_derecha;
    }

    public function setMovArtiPulgarAbduccion0FinalDerecha(?string $mov_arti_pulgar_abduccion_0_final_derecha): self
    {
        $this->mov_arti_pulgar_abduccion_0_final_derecha = $mov_arti_pulgar_abduccion_0_final_derecha;

        return $this;
    }

    public function getMovArtiPulgarAbduccion0InicialIzquierda(): ?string
    {
        return $this->mov_arti_pulgar_abduccion_0_inicial_izquierda;
    }

    public function setMovArtiPulgarAbduccion0InicialIzquierda(?string $mov_arti_pulgar_abduccion_0_inicial_izquierda): self
    {
        $this->mov_arti_pulgar_abduccion_0_inicial_izquierda = $mov_arti_pulgar_abduccion_0_inicial_izquierda;

        return $this;
    }

    public function getMovArtiPulgarAbduccion0FinalIzquierda(): ?string
    {
        return $this->mov_arti_pulgar_abduccion_0_final_izquierda;
    }

    public function setMovArtiPulgarAbduccion0FinalIzquierda(?string $mov_arti_pulgar_abduccion_0_final_izquierda): self
    {
        $this->mov_arti_pulgar_abduccion_0_final_izquierda = $mov_arti_pulgar_abduccion_0_final_izquierda;

        return $this;
    }

    public function getMovArtiPulgarOposicionInicialDerecha(): ?string
    {
        return $this->mov_arti_pulgar_oposicion_inicial_derecha;
    }

    public function setMovArtiPulgarOposicionInicialDerecha(?string $mov_arti_pulgar_oposicion_inicial_derecha): self
    {
        $this->mov_arti_pulgar_oposicion_inicial_derecha = $mov_arti_pulgar_oposicion_inicial_derecha;

        return $this;
    }

    public function getMovArtiPulgarOposicionFinalDerecha(): ?string
    {
        return $this->mov_arti_pulgar_oposicion_final_derecha;
    }

    public function setMovArtiPulgarOposicionFinalDerecha(?string $mov_arti_pulgar_oposicion_final_derecha): self
    {
        $this->mov_arti_pulgar_oposicion_final_derecha = $mov_arti_pulgar_oposicion_final_derecha;

        return $this;
    }

    public function getMovArtiPulgarOposicionInicialIzquierda(): ?string
    {
        return $this->mov_arti_pulgar_oposicion_inicial_izquierda;
    }

    public function setMovArtiPulgarOposicionInicialIzquierda(?string $mov_arti_pulgar_oposicion_inicial_izquierda): self
    {
        $this->mov_arti_pulgar_oposicion_inicial_izquierda = $mov_arti_pulgar_oposicion_inicial_izquierda;

        return $this;
    }

    public function getMovArtiPulgarOposicionFinalIzquierda(): ?string
    {
        return $this->mov_arti_pulgar_oposicion_final_izquierda;
    }

    public function setMovArtiPulgarOposicionFinalIzquierda(?string $mov_arti_pulgar_oposicion_final_izquierda): self
    {
        $this->mov_arti_pulgar_oposicion_final_izquierda = $mov_arti_pulgar_oposicion_final_izquierda;

        return $this;
    }

    public function getEvalFuncDeslizamientoTendinosoViDerecha(): ?string
    {
        return $this->eval_func_deslizamiento_tendinoso_vi_derecha;
    }

    public function setEvalFuncDeslizamientoTendinosoViDerecha(?string $eval_func_deslizamiento_tendinoso_vi_derecha): self
    {
        $this->eval_func_deslizamiento_tendinoso_vi_derecha = $eval_func_deslizamiento_tendinoso_vi_derecha;

        return $this;
    }

    public function getEvalFuncDeslizamientoTendinosoVfDerecha(): ?string
    {
        return $this->eval_func_deslizamiento_tendinoso_vf_derecha;
    }

    public function setEvalFuncDeslizamientoTendinosoVfDerecha(?string $eval_func_deslizamiento_tendinoso_vf_derecha): self
    {
        $this->eval_func_deslizamiento_tendinoso_vf_derecha = $eval_func_deslizamiento_tendinoso_vf_derecha;

        return $this;
    }

    public function getEvalFuncDeslizamientoTendinosoViIzquierda(): ?string
    {
        return $this->eval_func_deslizamiento_tendinoso_vi_izquierda;
    }

    public function setEvalFuncDeslizamientoTendinosoViIzquierda(?string $eval_func_deslizamiento_tendinoso_vi_izquierda): self
    {
        $this->eval_func_deslizamiento_tendinoso_vi_izquierda = $eval_func_deslizamiento_tendinoso_vi_izquierda;

        return $this;
    }

    public function getEvalFuncDeslizamientoTendinosoVfIzquierda(): ?string
    {
        return $this->eval_func_deslizamiento_tendinoso_vf_izquierda;
    }

    public function setEvalFuncDeslizamientoTendinosoVfIzquierda(?string $eval_func_deslizamiento_tendinoso_vf_izquierda): self
    {
        $this->eval_func_deslizamiento_tendinoso_vf_izquierda = $eval_func_deslizamiento_tendinoso_vf_izquierda;

        return $this;
    }

    public function getEvalFuncAgarreViDerecha(): ?string
    {
        return $this->eval_func_agarre_vi_derecha;
    }

    public function setEvalFuncAgarreViDerecha(?string $eval_func_agarre_vi_derecha): self
    {
        $this->eval_func_agarre_vi_derecha = $eval_func_agarre_vi_derecha;

        return $this;
    }

    public function getEvalFuncAgarreVfDerecha(): ?string
    {
        return $this->eval_func_agarre_vf_derecha;
    }

    public function setEvalFuncAgarreVfDerecha(?string $eval_func_agarre_vf_derecha): self
    {
        $this->eval_func_agarre_vf_derecha = $eval_func_agarre_vf_derecha;

        return $this;
    }

    public function getEvalFuncAgarreViIzquierda(): ?string
    {
        return $this->eval_func_agarre_vi_izquierda;
    }

    public function setEvalFuncAgarreViIzquierda(?string $eval_func_agarre_vi_izquierda): self
    {
        $this->eval_func_agarre_vi_izquierda = $eval_func_agarre_vi_izquierda;

        return $this;
    }

    public function getEvalFuncAgarreVfIzquierda(): ?string
    {
        return $this->eval_func_agarre_vf_izquierda;
    }

    public function setEvalFuncAgarreVfIzquierda(?string $eval_func_agarre_vf_izquierda): self
    {
        $this->eval_func_agarre_vf_izquierda = $eval_func_agarre_vf_izquierda;

        return $this;
    }

    public function getEvalFuncManoGarraViDerecha(): ?string
    {
        return $this->eval_func_mano_garra_vi_derecha;
    }

    public function setEvalFuncManoGarraViDerecha(?string $eval_func_mano_garra_vi_derecha): self
    {
        $this->eval_func_mano_garra_vi_derecha = $eval_func_mano_garra_vi_derecha;

        return $this;
    }

    public function getEvalFuncManoGarraVfDerecha(): ?string
    {
        return $this->eval_func_mano_garra_vf_derecha;
    }

    public function setEvalFuncManoGarraVfDerecha(?string $eval_func_mano_garra_vf_derecha): self
    {
        $this->eval_func_mano_garra_vf_derecha = $eval_func_mano_garra_vf_derecha;

        return $this;
    }

    public function getEvalFuncManoGarraViIzquierda(): ?string
    {
        return $this->eval_func_mano_garra_vi_izquierda;
    }

    public function setEvalFuncManoGarraViIzquierda(?string $eval_func_mano_garra_vi_izquierda): self
    {
        $this->eval_func_mano_garra_vi_izquierda = $eval_func_mano_garra_vi_izquierda;

        return $this;
    }

    public function getEvalFuncManoGarraVfIzquierda(): ?string
    {
        return $this->eval_func_mano_garra_vf_izquierda;
    }

    public function setEvalFuncManoGarraVfIzquierda(?string $eval_func_mano_garra_vf_izquierda): self
    {
        $this->eval_func_mano_garra_vf_izquierda = $eval_func_mano_garra_vf_izquierda;

        return $this;
    }

    public function getEvalFuncPunoCerradoViDerecha(): ?string
    {
        return $this->eval_func_puno_cerrado_vi_derecha;
    }

    public function setEvalFuncPunoCerradoViDerecha(?string $eval_func_puno_cerrado_vi_derecha): self
    {
        $this->eval_func_puno_cerrado_vi_derecha = $eval_func_puno_cerrado_vi_derecha;

        return $this;
    }

    public function getEvalFuncPunoCerradoVfDerecha(): ?string
    {
        return $this->eval_func_puno_cerrado_vf_derecha;
    }

    public function setEvalFuncPunoCerradoVfDerecha(?string $eval_func_puno_cerrado_vf_derecha): self
    {
        $this->eval_func_puno_cerrado_vf_derecha = $eval_func_puno_cerrado_vf_derecha;

        return $this;
    }

    public function getEvalFuncPunoCerradoViIzquierda(): ?string
    {
        return $this->eval_func_puno_cerrado_vi_izquierda;
    }

    public function setEvalFuncPunoCerradoViIzquierda(?string $eval_func_puno_cerrado_vi_izquierda): self
    {
        $this->eval_func_puno_cerrado_vi_izquierda = $eval_func_puno_cerrado_vi_izquierda;

        return $this;
    }

    public function getEvalFuncPunoCerradoVfIzquierda(): ?string
    {
        return $this->eval_func_puno_cerrado_vf_izquierda;
    }

    public function setEvalFuncPunoCerradoVfIzquierda(?string $eval_func_puno_cerrado_vf_izquierda): self
    {
        $this->eval_func_puno_cerrado_vf_izquierda = $eval_func_puno_cerrado_vf_izquierda;

        return $this;
    }

    public function getEvalFuncOposicionPulgarIndiceViDerecha(): ?string
    {
        return $this->eval_func_oposicion_pulgar_indice_vi_derecha;
    }

    public function setEvalFuncOposicionPulgarIndiceViDerecha(?string $eval_func_oposicion_pulgar_indice_vi_derecha): self
    {
        $this->eval_func_oposicion_pulgar_indice_vi_derecha = $eval_func_oposicion_pulgar_indice_vi_derecha;

        return $this;
    }

    public function getEvalFuncOposicionPulgarIndiceVfDerecha(): ?string
    {
        return $this->eval_func_oposicion_pulgar_indice_vf_derecha;
    }

    public function setEvalFuncOposicionPulgarIndiceVfDerecha(?string $eval_func_oposicion_pulgar_indice_vf_derecha): self
    {
        $this->eval_func_oposicion_pulgar_indice_vf_derecha = $eval_func_oposicion_pulgar_indice_vf_derecha;

        return $this;
    }

    public function getEvalFuncOposicionPulgarIndiceViIzquierda(): ?string
    {
        return $this->eval_func_oposicion_pulgar_indice_vi_izquierda;
    }

    public function setEvalFuncOposicionPulgarIndiceViIzquierda(?string $eval_func_oposicion_pulgar_indice_vi_izquierda): self
    {
        $this->eval_func_oposicion_pulgar_indice_vi_izquierda = $eval_func_oposicion_pulgar_indice_vi_izquierda;

        return $this;
    }

    public function getEvalFuncOposicionPulgarIndiceVfIzquierda(): ?string
    {
        return $this->eval_func_oposicion_pulgar_indice_vf_izquierda;
    }

    public function setEvalFuncOposicionPulgarIndiceVfIzquierda(?string $eval_func_oposicion_pulgar_indice_vf_izquierda): self
    {
        $this->eval_func_oposicion_pulgar_indice_vf_izquierda = $eval_func_oposicion_pulgar_indice_vf_izquierda;

        return $this;
    }

    public function getEvalFuncOposicionPulgarMedioViDerecha(): ?string
    {
        return $this->eval_func_oposicion_pulgar_medio_vi_derecha;
    }

    public function setEvalFuncOposicionPulgarMedioViDerecha(?string $eval_func_oposicion_pulgar_medio_vi_derecha): self
    {
        $this->eval_func_oposicion_pulgar_medio_vi_derecha = $eval_func_oposicion_pulgar_medio_vi_derecha;

        return $this;
    }

    public function getEvalFuncOposicionPulgarMedioVfDerecha(): ?string
    {
        return $this->eval_func_oposicion_pulgar_medio_vf_derecha;
    }

    public function setEvalFuncOposicionPulgarMedioVfDerecha(?string $eval_func_oposicion_pulgar_medio_vf_derecha): self
    {
        $this->eval_func_oposicion_pulgar_medio_vf_derecha = $eval_func_oposicion_pulgar_medio_vf_derecha;

        return $this;
    }

    public function getEvalFuncOposicionPulgarMedioViIzquierda(): ?string
    {
        return $this->eval_func_oposicion_pulgar_medio_vi_izquierda;
    }

    public function setEvalFuncOposicionPulgarMedioViIzquierda(?string $eval_func_oposicion_pulgar_medio_vi_izquierda): self
    {
        $this->eval_func_oposicion_pulgar_medio_vi_izquierda = $eval_func_oposicion_pulgar_medio_vi_izquierda;

        return $this;
    }

    public function getEvalFuncOposicionPulgarMedioVfIzquierda(): ?string
    {
        return $this->eval_func_oposicion_pulgar_medio_vf_izquierda;
    }

    public function setEvalFuncOposicionPulgarMedioVfIzquierda(?string $eval_func_oposicion_pulgar_medio_vf_izquierda): self
    {
        $this->eval_func_oposicion_pulgar_medio_vf_izquierda = $eval_func_oposicion_pulgar_medio_vf_izquierda;

        return $this;
    }

    public function getEvalFuncOposicionPulgarAnularViDerecha(): ?string
    {
        return $this->eval_func_oposicion_pulgar_anular_vi_derecha;
    }

    public function setEvalFuncOposicionPulgarAnularViDerecha(?string $eval_func_oposicion_pulgar_anular_vi_derecha): self
    {
        $this->eval_func_oposicion_pulgar_anular_vi_derecha = $eval_func_oposicion_pulgar_anular_vi_derecha;

        return $this;
    }

    public function getEvalFuncOposicionPulgarAnularVfDerecha(): ?string
    {
        return $this->eval_func_oposicion_pulgar_anular_vf_derecha;
    }

    public function setEvalFuncOposicionPulgarAnularVfDerecha(?string $eval_func_oposicion_pulgar_anular_vf_derecha): self
    {
        $this->eval_func_oposicion_pulgar_anular_vf_derecha = $eval_func_oposicion_pulgar_anular_vf_derecha;

        return $this;
    }

    public function getEvalFuncOposicionPulgarAnularViIzquierda(): ?string
    {
        return $this->eval_func_oposicion_pulgar_anular_vi_izquierda;
    }

    public function setEvalFuncOposicionPulgarAnularViIzquierda(?string $eval_func_oposicion_pulgar_anular_vi_izquierda): self
    {
        $this->eval_func_oposicion_pulgar_anular_vi_izquierda = $eval_func_oposicion_pulgar_anular_vi_izquierda;

        return $this;
    }

    public function getEvalFuncOposicionPulgarAnularVfIzquierda(): ?string
    {
        return $this->eval_func_oposicion_pulgar_anular_vf_izquierda;
    }

    public function setEvalFuncOposicionPulgarAnularVfIzquierda(?string $eval_func_oposicion_pulgar_anular_vf_izquierda): self
    {
        $this->eval_func_oposicion_pulgar_anular_vf_izquierda = $eval_func_oposicion_pulgar_anular_vf_izquierda;

        return $this;
    }

    public function getEvalFuncOposicionPulgarMeniqueViDerecha(): ?string
    {
        return $this->eval_func_oposicion_pulgar_menique_vi_derecha;
    }

    public function setEvalFuncOposicionPulgarMeniqueViDerecha(?string $eval_func_oposicion_pulgar_menique_vi_derecha): self
    {
        $this->eval_func_oposicion_pulgar_menique_vi_derecha = $eval_func_oposicion_pulgar_menique_vi_derecha;

        return $this;
    }

    public function getEvalFuncOposicionPulgarMeniqueVfDerecha(): ?string
    {
        return $this->eval_func_oposicion_pulgar_menique_vf_derecha;
    }

    public function setEvalFuncOposicionPulgarMeniqueVfDerecha(?string $eval_func_oposicion_pulgar_menique_vf_derecha): self
    {
        $this->eval_func_oposicion_pulgar_menique_vf_derecha = $eval_func_oposicion_pulgar_menique_vf_derecha;

        return $this;
    }

    public function getEvalFuncOposicionPulgarMeniqueViIzquierda(): ?string
    {
        return $this->eval_func_oposicion_pulgar_menique_vi_izquierda;
    }

    public function setEvalFuncOposicionPulgarMeniqueViIzquierda(?string $eval_func_oposicion_pulgar_menique_vi_izquierda): self
    {
        $this->eval_func_oposicion_pulgar_menique_vi_izquierda = $eval_func_oposicion_pulgar_menique_vi_izquierda;

        return $this;
    }

    public function getEvalFuncOposicionPulgarMeniqueVfIzquierda(): ?string
    {
        return $this->eval_func_oposicion_pulgar_menique_vf_izquierda;
    }

    public function setEvalFuncOposicionPulgarMeniqueVfIzquierda(?string $eval_func_oposicion_pulgar_menique_vf_izquierda): self
    {
        $this->eval_func_oposicion_pulgar_menique_vf_izquierda = $eval_func_oposicion_pulgar_menique_vf_izquierda;

        return $this;
    }

    public function getEvalFuncPruebaOViDerecha(): ?string
    {
        return $this->eval_func_prueba_o_vi_derecha;
    }

    public function setEvalFuncPruebaOViDerecha(?string $eval_func_prueba_o_vi_derecha): self
    {
        $this->eval_func_prueba_o_vi_derecha = $eval_func_prueba_o_vi_derecha;

        return $this;
    }

    public function getEvalFuncPruebaOVfDerecha(): ?string
    {
        return $this->eval_func_prueba_o_vf_derecha;
    }

    public function setEvalFuncPruebaOVfDerecha(?string $eval_func_prueba_o_vf_derecha): self
    {
        $this->eval_func_prueba_o_vf_derecha = $eval_func_prueba_o_vf_derecha;

        return $this;
    }

    public function getEvalFuncPruebaOViIzquierda(): ?string
    {
        return $this->eval_func_prueba_o_vi_izquierda;
    }

    public function setEvalFuncPruebaOViIzquierda(?string $eval_func_prueba_o_vi_izquierda): self
    {
        $this->eval_func_prueba_o_vi_izquierda = $eval_func_prueba_o_vi_izquierda;

        return $this;
    }

    public function getEvalFuncPruebaOVfIzquierda(): ?string
    {
        return $this->eval_func_prueba_o_vf_izquierda;
    }

    public function setEvalFuncPruebaOVfIzquierda(?string $eval_func_prueba_o_vf_izquierda): self
    {
        $this->eval_func_prueba_o_vf_izquierda = $eval_func_prueba_o_vf_izquierda;

        return $this;
    }

    public function getMovArtiDedosFlexionMcfInicialDerecha(): ?string
    {
        return $this->mov_arti_dedos_flexion_mcf_inicial_derecha;
    }

    public function setMovArtiDedosFlexionMcfInicialDerecha(?string $mov_arti_dedos_flexion_mcf_inicial_derecha): self
    {
        $this->mov_arti_dedos_flexion_mcf_inicial_derecha = $mov_arti_dedos_flexion_mcf_inicial_derecha;

        return $this;
    }

    public function getMovArtiDedosFlexionMcfFinalDerecha(): ?string
    {
        return $this->mov_arti_dedos_flexion_mcf_final_derecha;
    }

    public function setMovArtiDedosFlexionMcfFinalDerecha(?string $mov_arti_dedos_flexion_mcf_final_derecha): self
    {
        $this->mov_arti_dedos_flexion_mcf_final_derecha = $mov_arti_dedos_flexion_mcf_final_derecha;

        return $this;
    }

    public function getMovArtiDedosFlexionMcfInicialIzquierda(): ?string
    {
        return $this->mov_arti_dedos_flexion_mcf_inicial_izquierda;
    }

    public function setMovArtiDedosFlexionMcfInicialIzquierda(?string $mov_arti_dedos_flexion_mcf_inicial_izquierda): self
    {
        $this->mov_arti_dedos_flexion_mcf_inicial_izquierda = $mov_arti_dedos_flexion_mcf_inicial_izquierda;

        return $this;
    }

    public function getMovArtiDedosFlexionMcfFinalIzquierda(): ?string
    {
        return $this->mov_arti_dedos_flexion_mcf_final_izquierda;
    }

    public function setMovArtiDedosFlexionMcfFinalIzquierda(?string $mov_arti_dedos_flexion_mcf_final_izquierda): self
    {
        $this->mov_arti_dedos_flexion_mcf_final_izquierda = $mov_arti_dedos_flexion_mcf_final_izquierda;

        return $this;
    }

    public function getMovArtiDedosFlexionIfpInicialDerecha(): ?string
    {
        return $this->mov_arti_dedos_flexion_ifp_inicial_derecha;
    }

    public function setMovArtiDedosFlexionIfpInicialDerecha(?string $mov_arti_dedos_flexion_ifp_inicial_derecha): self
    {
        $this->mov_arti_dedos_flexion_ifp_inicial_derecha = $mov_arti_dedos_flexion_ifp_inicial_derecha;

        return $this;
    }

    public function getMovArtiDedosFlexionIfpFinalDerecha(): ?string
    {
        return $this->mov_arti_dedos_flexion_ifp_final_derecha;
    }

    public function setMovArtiDedosFlexionIfpFinalDerecha(?string $mov_arti_dedos_flexion_ifp_final_derecha): self
    {
        $this->mov_arti_dedos_flexion_ifp_final_derecha = $mov_arti_dedos_flexion_ifp_final_derecha;

        return $this;
    }

    public function getMovArtiDedosFlexionIfpInicialIzquierda(): ?string
    {
        return $this->mov_arti_dedos_flexion_ifp_inicial_izquierda;
    }

    public function setMovArtiDedosFlexionIfpInicialIzquierda(?string $mov_arti_dedos_flexion_ifp_inicial_izquierda): self
    {
        $this->mov_arti_dedos_flexion_ifp_inicial_izquierda = $mov_arti_dedos_flexion_ifp_inicial_izquierda;

        return $this;
    }

    public function getMovArtiDedosFlexionIfpFinalIzquierda(): ?string
    {
        return $this->mov_arti_dedos_flexion_ifp_final_izquierda;
    }

    public function setMovArtiDedosFlexionIfpFinalIzquierda(?string $mov_arti_dedos_flexion_ifp_final_izquierda): self
    {
        $this->mov_arti_dedos_flexion_ifp_final_izquierda = $mov_arti_dedos_flexion_ifp_final_izquierda;

        return $this;
    }

    public function getMovArtiDedosFlexionIfdInicialDerecha(): ?string
    {
        return $this->mov_arti_dedos_flexion_ifd_inicial_derecha;
    }

    public function setMovArtiDedosFlexionIfdInicialDerecha(?string $mov_arti_dedos_flexion_ifd_inicial_derecha): self
    {
        $this->mov_arti_dedos_flexion_ifd_inicial_derecha = $mov_arti_dedos_flexion_ifd_inicial_derecha;

        return $this;
    }

    public function getMovArtiDedosFlexionIfdFinalDerecha(): ?string
    {
        return $this->mov_arti_dedos_flexion_ifd_final_derecha;
    }

    public function setMovArtiDedosFlexionIfdFinalDerecha(?string $mov_arti_dedos_flexion_ifd_final_derecha): self
    {
        $this->mov_arti_dedos_flexion_ifd_final_derecha = $mov_arti_dedos_flexion_ifd_final_derecha;

        return $this;
    }

    public function getMovArtiDedosFlexionIfdInicialIzquierda(): ?string
    {
        return $this->mov_arti_dedos_flexion_ifd_inicial_izquierda;
    }

    public function setMovArtiDedosFlexionIfdInicialIzquierda(?string $mov_arti_dedos_flexion_ifd_inicial_izquierda): self
    {
        $this->mov_arti_dedos_flexion_ifd_inicial_izquierda = $mov_arti_dedos_flexion_ifd_inicial_izquierda;

        return $this;
    }

    public function getMovArtiDedosFlexionIfdFinalIzquierda(): ?string
    {
        return $this->mov_arti_dedos_flexion_ifd_final_izquierda;
    }

    public function setMovArtiDedosFlexionIfdFinalIzquierda(?string $mov_arti_dedos_flexion_ifd_final_izquierda): self
    {
        $this->mov_arti_dedos_flexion_ifd_final_izquierda = $mov_arti_dedos_flexion_ifd_final_izquierda;

        return $this;
    }

    public function getMovArtiDedosExtensionMcfInicialDerecha(): ?string
    {
        return $this->mov_arti_dedos_extension_mcf_inicial_derecha;
    }

    public function setMovArtiDedosExtensionMcfInicialDerecha(?string $mov_arti_dedos_extension_mcf_inicial_derecha): self
    {
        $this->mov_arti_dedos_extension_mcf_inicial_derecha = $mov_arti_dedos_extension_mcf_inicial_derecha;

        return $this;
    }

    public function getMovArtiDedosExtensionMcfFinalDerecha(): ?string
    {
        return $this->mov_arti_dedos_extension_mcf_final_derecha;
    }

    public function setMovArtiDedosExtensionMcfFinalDerecha(?string $mov_arti_dedos_extension_mcf_final_derecha): self
    {
        $this->mov_arti_dedos_extension_mcf_final_derecha = $mov_arti_dedos_extension_mcf_final_derecha;

        return $this;
    }

    public function getMovArtiDedosExtensionMcfInicialIzquierda(): ?string
    {
        return $this->mov_arti_dedos_extension_mcf_inicial_izquierda;
    }

    public function setMovArtiDedosExtensionMcfInicialIzquierda(?string $mov_arti_dedos_extension_mcf_inicial_izquierda): self
    {
        $this->mov_arti_dedos_extension_mcf_inicial_izquierda = $mov_arti_dedos_extension_mcf_inicial_izquierda;

        return $this;
    }

    public function getMovArtiDedosExtensionMcfFinalIzquierda(): ?string
    {
        return $this->mov_arti_dedos_extension_mcf_final_izquierda;
    }

    public function setMovArtiDedosExtensionMcfFinalIzquierda(?string $mov_arti_dedos_extension_mcf_final_izquierda): self
    {
        $this->mov_arti_dedos_extension_mcf_final_izquierda = $mov_arti_dedos_extension_mcf_final_izquierda;

        return $this;
    }

    public function getMovArtiDedosExtensionIfpInicialDerecha(): ?string
    {
        return $this->mov_arti_dedos_extension_ifp_inicial_derecha;
    }

    public function setMovArtiDedosExtensionIfpInicialDerecha(?string $mov_arti_dedos_extension_ifp_inicial_derecha): self
    {
        $this->mov_arti_dedos_extension_ifp_inicial_derecha = $mov_arti_dedos_extension_ifp_inicial_derecha;

        return $this;
    }

    public function getMovArtiDedosExtensionIfpFinalDerecha(): ?string
    {
        return $this->mov_arti_dedos_extension_ifp_final_derecha;
    }

    public function setMovArtiDedosExtensionIfpFinalDerecha(?string $mov_arti_dedos_extension_ifp_final_derecha): self
    {
        $this->mov_arti_dedos_extension_ifp_final_derecha = $mov_arti_dedos_extension_ifp_final_derecha;

        return $this;
    }

    public function getMovArtiDedosExtensionIfpInicialIzquierda(): ?string
    {
        return $this->mov_arti_dedos_extension_ifp_inicial_izquierda;
    }

    public function setMovArtiDedosExtensionIfpInicialIzquierda(?string $mov_arti_dedos_extension_ifp_inicial_izquierda): self
    {
        $this->mov_arti_dedos_extension_ifp_inicial_izquierda = $mov_arti_dedos_extension_ifp_inicial_izquierda;

        return $this;
    }

    public function getMovArtiDedosExtensionIfpFinalIzquierda(): ?string
    {
        return $this->mov_arti_dedos_extension_ifp_final_izquierda;
    }

    public function setMovArtiDedosExtensionIfpFinalIzquierda(?string $mov_arti_dedos_extension_ifp_final_izquierda): self
    {
        $this->mov_arti_dedos_extension_ifp_final_izquierda = $mov_arti_dedos_extension_ifp_final_izquierda;

        return $this;
    }

    public function getMovArtiDedosExtensionIfdInicialDerecha(): ?string
    {
        return $this->mov_arti_dedos_extension_ifd_inicial_derecha;
    }

    public function setMovArtiDedosExtensionIfdInicialDerecha(?string $mov_arti_dedos_extension_ifd_inicial_derecha): self
    {
        $this->mov_arti_dedos_extension_ifd_inicial_derecha = $mov_arti_dedos_extension_ifd_inicial_derecha;

        return $this;
    }

    public function getMovArtiDedosExtensionIfdFinalDerecha(): ?string
    {
        return $this->mov_arti_dedos_extension_ifd_final_derecha;
    }

    public function setMovArtiDedosExtensionIfdFinalDerecha(?string $mov_arti_dedos_extension_ifd_final_derecha): self
    {
        $this->mov_arti_dedos_extension_ifd_final_derecha = $mov_arti_dedos_extension_ifd_final_derecha;

        return $this;
    }

    public function getMovArtiDedosExtensionIfdInicialIzquierda(): ?string
    {
        return $this->mov_arti_dedos_extension_ifd_inicial_izquierda;
    }

    public function setMovArtiDedosExtensionIfdInicialIzquierda(?string $mov_arti_dedos_extension_ifd_inicial_izquierda): self
    {
        $this->mov_arti_dedos_extension_ifd_inicial_izquierda = $mov_arti_dedos_extension_ifd_inicial_izquierda;

        return $this;
    }

    public function getMovArtiDedosExtensionIfdFinalIzquierda(): ?string
    {
        return $this->mov_arti_dedos_extension_ifd_final_izquierda;
    }

    public function setMovArtiDedosExtensionIfdFinalIzquierda(?string $mov_arti_dedos_extension_ifd_final_izquierda): self
    {
        $this->mov_arti_dedos_extension_ifd_final_izquierda = $mov_arti_dedos_extension_ifd_final_izquierda;

        return $this;
    }

    public function getMovArtiDedosAbduccion30InicialDerecha(): ?string
    {
        return $this->mov_arti_dedos_abduccion_30_inicial_derecha;
    }

    public function setMovArtiDedosAbduccion30InicialDerecha(?string $mov_arti_dedos_abduccion_30_inicial_derecha): self
    {
        $this->mov_arti_dedos_abduccion_30_inicial_derecha = $mov_arti_dedos_abduccion_30_inicial_derecha;

        return $this;
    }

    public function getMovArtiDedosAbduccion30FinalDerecha(): ?string
    {
        return $this->mov_arti_dedos_abduccion_30_final_derecha;
    }

    public function setMovArtiDedosAbduccion30FinalDerecha(?string $mov_arti_dedos_abduccion_30_final_derecha): self
    {
        $this->mov_arti_dedos_abduccion_30_final_derecha = $mov_arti_dedos_abduccion_30_final_derecha;

        return $this;
    }

    public function getMovArtiDedosAbduccion30InicialIzquierda(): ?string
    {
        return $this->mov_arti_dedos_abduccion_30_inicial_izquierda;
    }

    public function setMovArtiDedosAbduccion30InicialIzquierda(?string $mov_arti_dedos_abduccion_30_inicial_izquierda): self
    {
        $this->mov_arti_dedos_abduccion_30_inicial_izquierda = $mov_arti_dedos_abduccion_30_inicial_izquierda;

        return $this;
    }

    public function getMovArtiDedosAbduccion30FinalIzquierda(): ?string
    {
        return $this->mov_arti_dedos_abduccion_30_final_izquierda;
    }

    public function setMovArtiDedosAbduccion30FinalIzquierda(?string $mov_arti_dedos_abduccion_30_final_izquierda): self
    {
        $this->mov_arti_dedos_abduccion_30_final_izquierda = $mov_arti_dedos_abduccion_30_final_izquierda;

        return $this;
    }

    public function getMovArtiDedosAbduccion300InicialDerecha(): ?string
    {
        return $this->mov_arti_dedos_abduccion_30_0_inicial_derecha;
    }

    public function setMovArtiDedosAbduccion300InicialDerecha(?string $mov_arti_dedos_abduccion_30_0_inicial_derecha): self
    {
        $this->mov_arti_dedos_abduccion_30_0_inicial_derecha = $mov_arti_dedos_abduccion_30_0_inicial_derecha;

        return $this;
    }

    public function getMovArtiDedosAbduccion300FinalDerecha(): ?string
    {
        return $this->mov_arti_dedos_abduccion_30_0_final_derecha;
    }

    public function setMovArtiDedosAbduccion300FinalDerecha(?string $mov_arti_dedos_abduccion_30_0_final_derecha): self
    {
        $this->mov_arti_dedos_abduccion_30_0_final_derecha = $mov_arti_dedos_abduccion_30_0_final_derecha;

        return $this;
    }

    public function getMovArtiDedosAbduccion300InicialIzquierda(): ?string
    {
        return $this->mov_arti_dedos_abduccion_30_0_inicial_izquierda;
    }

    public function setMovArtiDedosAbduccion300InicialIzquierda(?string $mov_arti_dedos_abduccion_30_0_inicial_izquierda): self
    {
        $this->mov_arti_dedos_abduccion_30_0_inicial_izquierda = $mov_arti_dedos_abduccion_30_0_inicial_izquierda;

        return $this;
    }

    public function getMovArtiDedosAbduccion300FinalIzquierda(): ?string
    {
        return $this->mov_arti_dedos_abduccion_30_0_final_izquierda;
    }

    public function setMovArtiDedosAbduccion300FinalIzquierda(?string $mov_arti_dedos_abduccion_30_0_final_izquierda): self
    {
        $this->mov_arti_dedos_abduccion_30_0_final_izquierda = $mov_arti_dedos_abduccion_30_0_final_izquierda;

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

    public function getFuerMuscPalmarMayorInicialDerecha(): ?string
    {
        return $this->fuer_musc_palmar_mayor_inicial_derecha;
    }

    public function setFuerMuscPalmarMayorInicialDerecha(?string $fuer_musc_palmar_mayor_inicial_derecha): self
    {
        $this->fuer_musc_palmar_mayor_inicial_derecha = $fuer_musc_palmar_mayor_inicial_derecha;

        return $this;
    }

    public function getFuerMuscPalmarMayorFinalDerecha(): ?string
    {
        return $this->fuer_musc_palmar_mayor_final_derecha;
    }

    public function setFuerMuscPalmarMayorFinalDerecha(?string $fuer_musc_palmar_mayor_final_derecha): self
    {
        $this->fuer_musc_palmar_mayor_final_derecha = $fuer_musc_palmar_mayor_final_derecha;

        return $this;
    }

    public function getFuerMuscPalmarMayorInicialIzquierda(): ?string
    {
        return $this->fuer_musc_palmar_mayor_inicial_izquierda;
    }

    public function setFuerMuscPalmarMayorInicialIzquierda(?string $fuer_musc_palmar_mayor_inicial_izquierda): self
    {
        $this->fuer_musc_palmar_mayor_inicial_izquierda = $fuer_musc_palmar_mayor_inicial_izquierda;

        return $this;
    }

    public function getFuerMuscPalmarMayorFinalIzquierda(): ?string
    {
        return $this->fuer_musc_palmar_mayor_final_izquierda;
    }

    public function setFuerMuscPalmarMayorFinalIzquierda(?string $fuer_musc_palmar_mayor_final_izquierda): self
    {
        $this->fuer_musc_palmar_mayor_final_izquierda = $fuer_musc_palmar_mayor_final_izquierda;

        return $this;
    }

    public function getFuerMuscRadialesInicialDerecha(): ?string
    {
        return $this->fuer_musc_radiales_inicial_derecha;
    }

    public function setFuerMuscRadialesInicialDerecha(?string $fuer_musc_radiales_inicial_derecha): self
    {
        $this->fuer_musc_radiales_inicial_derecha = $fuer_musc_radiales_inicial_derecha;

        return $this;
    }

    public function getFuerMuscRadialesFinalDerecha(): ?string
    {
        return $this->fuer_musc_radiales_final_derecha;
    }

    public function setFuerMuscRadialesFinalDerecha(?string $fuer_musc_radiales_final_derecha): self
    {
        $this->fuer_musc_radiales_final_derecha = $fuer_musc_radiales_final_derecha;

        return $this;
    }

    public function getFuerMuscRadialesInicialIzquierda(): ?string
    {
        return $this->fuer_musc_radiales_inicial_izquierda;
    }

    public function setFuerMuscRadialesInicialIzquierda(?string $fuer_musc_radiales_inicial_izquierda): self
    {
        $this->fuer_musc_radiales_inicial_izquierda = $fuer_musc_radiales_inicial_izquierda;

        return $this;
    }

    public function getFuerMuscRadialesFinalIzquierda(): ?string
    {
        return $this->fuer_musc_radiales_final_izquierda;
    }

    public function setFuerMuscRadialesFinalIzquierda(?string $fuer_musc_radiales_final_izquierda): self
    {
        $this->fuer_musc_radiales_final_izquierda = $fuer_musc_radiales_final_izquierda;

        return $this;
    }

    public function getFuerMuscCubitalAnteriorInicialDerecha(): ?string
    {
        return $this->fuer_musc_cubital_anterior_inicial_derecha;
    }

    public function setFuerMuscCubitalAnteriorInicialDerecha(?string $fuer_musc_cubital_anterior_inicial_derecha): self
    {
        $this->fuer_musc_cubital_anterior_inicial_derecha = $fuer_musc_cubital_anterior_inicial_derecha;

        return $this;
    }

    public function getFuerMuscCubitalAnteriorFinalDerecha(): ?string
    {
        return $this->fuer_musc_cubital_anterior_final_derecha;
    }

    public function setFuerMuscCubitalAnteriorFinalDerecha(?string $fuer_musc_cubital_anterior_final_derecha): self
    {
        $this->fuer_musc_cubital_anterior_final_derecha = $fuer_musc_cubital_anterior_final_derecha;

        return $this;
    }

    public function getFuerMuscCubitalAnteriorInicialIzquierda(): ?string
    {
        return $this->fuer_musc_cubital_anterior_inicial_izquierda;
    }

    public function setFuerMuscCubitalAnteriorInicialIzquierda(?string $fuer_musc_cubital_anterior_inicial_izquierda): self
    {
        $this->fuer_musc_cubital_anterior_inicial_izquierda = $fuer_musc_cubital_anterior_inicial_izquierda;

        return $this;
    }

    public function getFuerMuscCubitalAnteriorFinalIzquierda(): ?string
    {
        return $this->fuer_musc_cubital_anterior_final_izquierda;
    }

    public function setFuerMuscCubitalAnteriorFinalIzquierda(?string $fuer_musc_cubital_anterior_final_izquierda): self
    {
        $this->fuer_musc_cubital_anterior_final_izquierda = $fuer_musc_cubital_anterior_final_izquierda;

        return $this;
    }

    public function getFuerMuscCubitalPosteriorInicialDerecha(): ?string
    {
        return $this->fuer_musc_cubital_posterior_inicial_derecha;
    }

    public function setFuerMuscCubitalPosteriorInicialDerecha(?string $fuer_musc_cubital_posterior_inicial_derecha): self
    {
        $this->fuer_musc_cubital_posterior_inicial_derecha = $fuer_musc_cubital_posterior_inicial_derecha;

        return $this;
    }

    public function getFuerMuscCubitalPosteriorFinalDerecha(): ?string
    {
        return $this->fuer_musc_cubital_posterior_final_derecha;
    }

    public function setFuerMuscCubitalPosteriorFinalDerecha(?string $fuer_musc_cubital_posterior_final_derecha): self
    {
        $this->fuer_musc_cubital_posterior_final_derecha = $fuer_musc_cubital_posterior_final_derecha;

        return $this;
    }

    public function getFuerMuscCubitalPosteriorInicialIzquierda(): ?string
    {
        return $this->fuer_musc_cubital_posterior_inicial_izquierda;
    }

    public function setFuerMuscCubitalPosteriorInicialIzquierda(?string $fuer_musc_cubital_posterior_inicial_izquierda): self
    {
        $this->fuer_musc_cubital_posterior_inicial_izquierda = $fuer_musc_cubital_posterior_inicial_izquierda;

        return $this;
    }

    public function getFuerMuscCubitalPosteriorFinalIzquierda(): ?string
    {
        return $this->fuer_musc_cubital_posterior_final_izquierda;
    }

    public function setFuerMuscCubitalPosteriorFinalIzquierda(?string $fuer_musc_cubital_posterior_final_izquierda): self
    {
        $this->fuer_musc_cubital_posterior_final_izquierda = $fuer_musc_cubital_posterior_final_izquierda;

        return $this;
    }

    public function getPulgarFlexorCortoInicialDerecha(): ?string
    {
        return $this->pulgar_flexor_corto_inicial_derecha;
    }

    public function setPulgarFlexorCortoInicialDerecha(?string $pulgar_flexor_corto_inicial_derecha): self
    {
        $this->pulgar_flexor_corto_inicial_derecha = $pulgar_flexor_corto_inicial_derecha;

        return $this;
    }

    public function getPulgarFlexorCortoFinalDerecha(): ?string
    {
        return $this->pulgar_flexor_corto_final_derecha;
    }

    public function setPulgarFlexorCortoFinalDerecha(?string $pulgar_flexor_corto_final_derecha): self
    {
        $this->pulgar_flexor_corto_final_derecha = $pulgar_flexor_corto_final_derecha;

        return $this;
    }

    public function getPulgarFlexorCortoInicialIzquierda(): ?string
    {
        return $this->pulgar_flexor_corto_inicial_izquierda;
    }

    public function setPulgarFlexorCortoInicialIzquierda(?string $pulgar_flexor_corto_inicial_izquierda): self
    {
        $this->pulgar_flexor_corto_inicial_izquierda = $pulgar_flexor_corto_inicial_izquierda;

        return $this;
    }

    public function getPulgarFlexorCortoFinalIzquierda(): ?string
    {
        return $this->pulgar_flexor_corto_final_izquierda;
    }

    public function setPulgarFlexorCortoFinalIzquierda(?string $pulgar_flexor_corto_final_izquierda): self
    {
        $this->pulgar_flexor_corto_final_izquierda = $pulgar_flexor_corto_final_izquierda;

        return $this;
    }

    public function getPulgarFlexorLargoInicialDerecha(): ?string
    {
        return $this->pulgar_flexor_largo_inicial_derecha;
    }

    public function setPulgarFlexorLargoInicialDerecha(?string $pulgar_flexor_largo_inicial_derecha): self
    {
        $this->pulgar_flexor_largo_inicial_derecha = $pulgar_flexor_largo_inicial_derecha;

        return $this;
    }

    public function getPulgarFlexorLargoFinalDerecha(): ?string
    {
        return $this->pulgar_flexor_largo_final_derecha;
    }

    public function setPulgarFlexorLargoFinalDerecha(?string $pulgar_flexor_largo_final_derecha): self
    {
        $this->pulgar_flexor_largo_final_derecha = $pulgar_flexor_largo_final_derecha;

        return $this;
    }

    public function getPulgarFlexorLargoInicialIzquierda(): ?string
    {
        return $this->pulgar_flexor_largo_inicial_izquierda;
    }

    public function setPulgarFlexorLargoInicialIzquierda(?string $pulgar_flexor_largo_inicial_izquierda): self
    {
        $this->pulgar_flexor_largo_inicial_izquierda = $pulgar_flexor_largo_inicial_izquierda;

        return $this;
    }

    public function getPulgarFlexorLargoFinalIzquierda(): ?string
    {
        return $this->pulgar_flexor_largo_final_izquierda;
    }

    public function setPulgarFlexorLargoFinalIzquierda(?string $pulgar_flexor_largo_final_izquierda): self
    {
        $this->pulgar_flexor_largo_final_izquierda = $pulgar_flexor_largo_final_izquierda;

        return $this;
    }

    public function getPulgarExtensorCortoInicialDerecha(): ?string
    {
        return $this->pulgar_extensor_corto_inicial_derecha;
    }

    public function setPulgarExtensorCortoInicialDerecha(?string $pulgar_extensor_corto_inicial_derecha): self
    {
        $this->pulgar_extensor_corto_inicial_derecha = $pulgar_extensor_corto_inicial_derecha;

        return $this;
    }

    public function getPulgarExtensorCortoFinalDerecha(): ?string
    {
        return $this->pulgar_extensor_corto_final_derecha;
    }

    public function setPulgarExtensorCortoFinalDerecha(?string $pulgar_extensor_corto_final_derecha): self
    {
        $this->pulgar_extensor_corto_final_derecha = $pulgar_extensor_corto_final_derecha;

        return $this;
    }

    public function getPulgarExtensorCortoInicialIzquierda(): ?string
    {
        return $this->pulgar_extensor_corto_inicial_izquierda;
    }

    public function setPulgarExtensorCortoInicialIzquierda(?string $pulgar_extensor_corto_inicial_izquierda): self
    {
        $this->pulgar_extensor_corto_inicial_izquierda = $pulgar_extensor_corto_inicial_izquierda;

        return $this;
    }

    public function getPulgarExtensorCortoFinalIzquierda(): ?string
    {
        return $this->pulgar_extensor_corto_final_izquierda;
    }

    public function setPulgarExtensorCortoFinalIzquierda(?string $pulgar_extensor_corto_final_izquierda): self
    {
        $this->pulgar_extensor_corto_final_izquierda = $pulgar_extensor_corto_final_izquierda;

        return $this;
    }

    public function getPulgarExtensorLargoInicialDerecha(): ?string
    {
        return $this->pulgar_extensor_largo_inicial_derecha;
    }

    public function setPulgarExtensorLargoInicialDerecha(?string $pulgar_extensor_largo_inicial_derecha): self
    {
        $this->pulgar_extensor_largo_inicial_derecha = $pulgar_extensor_largo_inicial_derecha;

        return $this;
    }

    public function getPulgarExtensorLargoFinalDerecha(): ?string
    {
        return $this->pulgar_extensor_largo_final_derecha;
    }

    public function setPulgarExtensorLargoFinalDerecha(?string $pulgar_extensor_largo_final_derecha): self
    {
        $this->pulgar_extensor_largo_final_derecha = $pulgar_extensor_largo_final_derecha;

        return $this;
    }

    public function getPulgarExtensorLargoInicialIzquierda(): ?string
    {
        return $this->pulgar_extensor_largo_inicial_izquierda;
    }

    public function setPulgarExtensorLargoInicialIzquierda(?string $pulgar_extensor_largo_inicial_izquierda): self
    {
        $this->pulgar_extensor_largo_inicial_izquierda = $pulgar_extensor_largo_inicial_izquierda;

        return $this;
    }

    public function getPulgarExtensorLargoFinalIzquierda(): ?string
    {
        return $this->pulgar_extensor_largo_final_izquierda;
    }

    public function setPulgarExtensorLargoFinalIzquierda(?string $pulgar_extensor_largo_final_izquierda): self
    {
        $this->pulgar_extensor_largo_final_izquierda = $pulgar_extensor_largo_final_izquierda;

        return $this;
    }

    public function getPulgarAbductoresInicialDerecha(): ?string
    {
        return $this->pulgar_abductores_inicial_derecha;
    }

    public function setPulgarAbductoresInicialDerecha(?string $pulgar_abductores_inicial_derecha): self
    {
        $this->pulgar_abductores_inicial_derecha = $pulgar_abductores_inicial_derecha;

        return $this;
    }

    public function getPulgarAbductoresFinalDerecha(): ?string
    {
        return $this->pulgar_abductores_final_derecha;
    }

    public function setPulgarAbductoresFinalDerecha(?string $pulgar_abductores_final_derecha): self
    {
        $this->pulgar_abductores_final_derecha = $pulgar_abductores_final_derecha;

        return $this;
    }

    public function getPulgarAbductoresInicialIzquierda(): ?string
    {
        return $this->pulgar_abductores_inicial_izquierda;
    }

    public function setPulgarAbductoresInicialIzquierda(?string $pulgar_abductores_inicial_izquierda): self
    {
        $this->pulgar_abductores_inicial_izquierda = $pulgar_abductores_inicial_izquierda;

        return $this;
    }

    public function getPulgarAbductoresFinalIzquierda(): ?string
    {
        return $this->pulgar_abductores_final_izquierda;
    }

    public function setPulgarAbductoresFinalIzquierda(?string $pulgar_abductores_final_izquierda): self
    {
        $this->pulgar_abductores_final_izquierda = $pulgar_abductores_final_izquierda;

        return $this;
    }

    public function getPulgarAductorInicialDerecha(): ?string
    {
        return $this->pulgar_aductor_inicial_derecha;
    }

    public function setPulgarAductorInicialDerecha(?string $pulgar_aductor_inicial_derecha): self
    {
        $this->pulgar_aductor_inicial_derecha = $pulgar_aductor_inicial_derecha;

        return $this;
    }

    public function getPulgarAductorFinalDerecha(): ?string
    {
        return $this->pulgar_aductor_final_derecha;
    }

    public function setPulgarAductorFinalDerecha(?string $pulgar_aductor_final_derecha): self
    {
        $this->pulgar_aductor_final_derecha = $pulgar_aductor_final_derecha;

        return $this;
    }

    public function getPulgarAductorInicialIzquierda(): ?string
    {
        return $this->pulgar_aductor_inicial_izquierda;
    }

    public function setPulgarAductorInicialIzquierda(?string $pulgar_aductor_inicial_izquierda): self
    {
        $this->pulgar_aductor_inicial_izquierda = $pulgar_aductor_inicial_izquierda;

        return $this;
    }

    public function getPulgarAductorFinalIzquierda(): ?string
    {
        return $this->pulgar_aductor_final_izquierda;
    }

    public function setPulgarAductorFinalIzquierda(?string $pulgar_aductor_final_izquierda): self
    {
        $this->pulgar_aductor_final_izquierda = $pulgar_aductor_final_izquierda;

        return $this;
    }

    public function getPulgarOponenteInicialDerecha(): ?string
    {
        return $this->pulgar_oponente_inicial_derecha;
    }

    public function setPulgarOponenteInicialDerecha(?string $pulgar_oponente_inicial_derecha): self
    {
        $this->pulgar_oponente_inicial_derecha = $pulgar_oponente_inicial_derecha;

        return $this;
    }

    public function getPulgarOponenteFinalDerecha(): ?string
    {
        return $this->pulgar_oponente_final_derecha;
    }

    public function setPulgarOponenteFinalDerecha(?string $pulgar_oponente_final_derecha): self
    {
        $this->pulgar_oponente_final_derecha = $pulgar_oponente_final_derecha;

        return $this;
    }

    public function getPulgarOponenteInicialIzquierda(): ?string
    {
        return $this->pulgar_oponente_inicial_izquierda;
    }

    public function setPulgarOponenteInicialIzquierda(?string $pulgar_oponente_inicial_izquierda): self
    {
        $this->pulgar_oponente_inicial_izquierda = $pulgar_oponente_inicial_izquierda;

        return $this;
    }

    public function getPulgarOponenteFinalIzquierda(): ?string
    {
        return $this->pulgar_oponente_final_izquierda;
    }

    public function setPulgarOponenteFinalIzquierda(?string $pulgar_oponente_final_izquierda): self
    {
        $this->pulgar_oponente_final_izquierda = $pulgar_oponente_final_izquierda;

        return $this;
    }

    public function getDedosLumbricalesInicialDerecha(): ?string
    {
        return $this->dedos_lumbricales_inicial_derecha;
    }

    public function setDedosLumbricalesInicialDerecha(?string $dedos_lumbricales_inicial_derecha): self
    {
        $this->dedos_lumbricales_inicial_derecha = $dedos_lumbricales_inicial_derecha;

        return $this;
    }

    public function getDedosLumbricalesFinalDerecha(): ?string
    {
        return $this->dedos_lumbricales_final_derecha;
    }

    public function setDedosLumbricalesFinalDerecha(?string $dedos_lumbricales_final_derecha): self
    {
        $this->dedos_lumbricales_final_derecha = $dedos_lumbricales_final_derecha;

        return $this;
    }

    public function getDedosLumbricalesInicialIzquierda(): ?string
    {
        return $this->dedos_lumbricales_inicial_izquierda;
    }

    public function setDedosLumbricalesInicialIzquierda(?string $dedos_lumbricales_inicial_izquierda): self
    {
        $this->dedos_lumbricales_inicial_izquierda = $dedos_lumbricales_inicial_izquierda;

        return $this;
    }

    public function getDedosLumbricalesFinalIzquierda(): ?string
    {
        return $this->dedos_lumbricales_final_izquierda;
    }

    public function setDedosLumbricalesFinalIzquierda(?string $dedos_lumbricales_final_izquierda): self
    {
        $this->dedos_lumbricales_final_izquierda = $dedos_lumbricales_final_izquierda;

        return $this;
    }

    public function getDedosFlexorProfundoInicialDerecha(): ?string
    {
        return $this->dedos_flexor_profundo_inicial_derecha;
    }

    public function setDedosFlexorProfundoInicialDerecha(string $dedos_flexor_profundo_inicial_derecha): self
    {
        $this->dedos_flexor_profundo_inicial_derecha = $dedos_flexor_profundo_inicial_derecha;

        return $this;
    }

    public function getDedosFlexorProfundoFinalDerecha(): ?string
    {
        return $this->dedos_flexor_profundo_final_derecha;
    }

    public function setDedosFlexorProfundoFinalDerecha(?string $dedos_flexor_profundo_final_derecha): self
    {
        $this->dedos_flexor_profundo_final_derecha = $dedos_flexor_profundo_final_derecha;

        return $this;
    }

    public function getDedosFlexorProfundoInicialIzquierda(): ?string
    {
        return $this->dedos_flexor_profundo_inicial_izquierda;
    }

    public function setDedosFlexorProfundoInicialIzquierda(?string $dedos_flexor_profundo_inicial_izquierda): self
    {
        $this->dedos_flexor_profundo_inicial_izquierda = $dedos_flexor_profundo_inicial_izquierda;

        return $this;
    }

    public function getDedosFlexorProfundoFinalIzquierda(): ?string
    {
        return $this->dedos_flexor_profundo_final_izquierda;
    }

    public function setDedosFlexorProfundoFinalIzquierda(?string $dedos_flexor_profundo_final_izquierda): self
    {
        $this->dedos_flexor_profundo_final_izquierda = $dedos_flexor_profundo_final_izquierda;

        return $this;
    }

    public function getDedosFlexorSuperficialInicialDerecha(): ?string
    {
        return $this->dedos_flexor_superficial_inicial_derecha;
    }

    public function setDedosFlexorSuperficialInicialDerecha(?string $dedos_flexor_superficial_inicial_derecha): self
    {
        $this->dedos_flexor_superficial_inicial_derecha = $dedos_flexor_superficial_inicial_derecha;

        return $this;
    }

    public function getDedosFlexorSuperficialFinalDerecha(): ?string
    {
        return $this->dedos_flexor_superficial_final_derecha;
    }

    public function setDedosFlexorSuperficialFinalDerecha(?string $dedos_flexor_superficial_final_derecha): self
    {
        $this->dedos_flexor_superficial_final_derecha = $dedos_flexor_superficial_final_derecha;

        return $this;
    }

    public function getDedosFlexorSuperficialInicialIzquierda(): ?string
    {
        return $this->dedos_flexor_superficial_inicial_izquierda;
    }

    public function setDedosFlexorSuperficialInicialIzquierda(?string $dedos_flexor_superficial_inicial_izquierda): self
    {
        $this->dedos_flexor_superficial_inicial_izquierda = $dedos_flexor_superficial_inicial_izquierda;

        return $this;
    }

    public function getDedosFlexorSuperficialFinalIzquierda(): ?string
    {
        return $this->dedos_flexor_superficial_final_izquierda;
    }

    public function setDedosFlexorSuperficialFinalIzquierda(?string $dedos_flexor_superficial_final_izquierda): self
    {
        $this->dedos_flexor_superficial_final_izquierda = $dedos_flexor_superficial_final_izquierda;

        return $this;
    }

    public function getDedosExtensorComunInicialDerecha(): ?string
    {
        return $this->dedos_extensor_comun_inicial_derecha;
    }

    public function setDedosExtensorComunInicialDerecha(?string $dedos_extensor_comun_inicial_derecha): self
    {
        $this->dedos_extensor_comun_inicial_derecha = $dedos_extensor_comun_inicial_derecha;

        return $this;
    }

    public function getDedosExtensorComunFinalDerecha(): ?string
    {
        return $this->dedos_extensor_comun_final_derecha;
    }

    public function setDedosExtensorComunFinalDerecha(?string $dedos_extensor_comun_final_derecha): self
    {
        $this->dedos_extensor_comun_final_derecha = $dedos_extensor_comun_final_derecha;

        return $this;
    }

    public function getDedosExtensorComunInicialIzquierda(): ?string
    {
        return $this->dedos_extensor_comun_inicial_izquierda;
    }

    public function setDedosExtensorComunInicialIzquierda(?string $dedos_extensor_comun_inicial_izquierda): self
    {
        $this->dedos_extensor_comun_inicial_izquierda = $dedos_extensor_comun_inicial_izquierda;

        return $this;
    }

    public function getDedosExtensorComunFinalIzquierda(): ?string
    {
        return $this->dedos_extensor_comun_final_izquierda;
    }

    public function setDedosExtensorComunFinalIzquierda(?string $dedos_extensor_comun_final_izquierda): self
    {
        $this->dedos_extensor_comun_final_izquierda = $dedos_extensor_comun_final_izquierda;

        return $this;
    }

    public function getDedosInteroseosDorsalesInicialDerecha(): ?string
    {
        return $this->dedos_interoseos_dorsales_inicial_derecha;
    }

    public function setDedosInteroseosDorsalesInicialDerecha(?string $dedos_interoseos_dorsales_inicial_derecha): self
    {
        $this->dedos_interoseos_dorsales_inicial_derecha = $dedos_interoseos_dorsales_inicial_derecha;

        return $this;
    }

    public function getDedosInteroseosDorsalesFinalDerecha(): ?string
    {
        return $this->dedos_interoseos_dorsales_final_derecha;
    }

    public function setDedosInteroseosDorsalesFinalDerecha(?string $dedos_interoseos_dorsales_final_derecha): self
    {
        $this->dedos_interoseos_dorsales_final_derecha = $dedos_interoseos_dorsales_final_derecha;

        return $this;
    }

    public function getDedosInteroseosDorsalesInicialIzquierda(): ?string
    {
        return $this->dedos_interoseos_dorsales_inicial_izquierda;
    }

    public function setDedosInteroseosDorsalesInicialIzquierda(?string $dedos_interoseos_dorsales_inicial_izquierda): self
    {
        $this->dedos_interoseos_dorsales_inicial_izquierda = $dedos_interoseos_dorsales_inicial_izquierda;

        return $this;
    }

    public function getDedosInteroseosDorsalesFinalIzquierda(): ?string
    {
        return $this->dedos_interoseos_dorsales_final_izquierda;
    }

    public function setDedosInteroseosDorsalesFinalIzquierda(?string $dedos_interoseos_dorsales_final_izquierda): self
    {
        $this->dedos_interoseos_dorsales_final_izquierda = $dedos_interoseos_dorsales_final_izquierda;

        return $this;
    }

    public function getDedosInteroseosPalmaresInicialDerecha(): ?string
    {
        return $this->dedos_interoseos_palmares_inicial_derecha;
    }

    public function setDedosInteroseosPalmaresInicialDerecha(?string $dedos_interoseos_palmares_inicial_derecha): self
    {
        $this->dedos_interoseos_palmares_inicial_derecha = $dedos_interoseos_palmares_inicial_derecha;

        return $this;
    }

    public function getDedosInteroseosPalmaresFinalDerecha(): ?string
    {
        return $this->dedos_interoseos_palmares_final_derecha;
    }

    public function setDedosInteroseosPalmaresFinalDerecha(?string $dedos_interoseos_palmares_final_derecha): self
    {
        $this->dedos_interoseos_palmares_final_derecha = $dedos_interoseos_palmares_final_derecha;

        return $this;
    }

    public function getDedosInteroseosPalmaresInicialIzquierda(): ?string
    {
        return $this->dedos_interoseos_palmares_inicial_izquierda;
    }

    public function setDedosInteroseosPalmaresInicialIzquierda(?string $dedos_interoseos_palmares_inicial_izquierda): self
    {
        $this->dedos_interoseos_palmares_inicial_izquierda = $dedos_interoseos_palmares_inicial_izquierda;

        return $this;
    }

    public function getDedosInteroseosPalmaresFinalIzquierda(): ?string
    {
        return $this->dedos_interoseos_palmares_final_izquierda;
    }

    public function setDedosInteroseosPalmaresFinalIzquierda(?string $dedos_interoseos_palmares_final_izquierda): self
    {
        $this->dedos_interoseos_palmares_final_izquierda = $dedos_interoseos_palmares_final_izquierda;

        return $this;
    }

    public function getFlexibilidadMunecaInicialDerecha(): ?string
    {
        return $this->flexibilidad_flexores_muneca_inicial_derecha;
    }

    public function setFlexibilidadMunecaInicialDerecha(?string $flexibilidad_flexores_muneca_inicial_derecha): self
    {
        $this->flexibilidad_flexores_muneca_inicial_derecha = $flexibilidad_flexores_muneca_inicial_derecha;

        return $this;
    }

    public function getFlexibilidadMunecaFinalDerecha(): ?string
    {
        return $this->flexibilidad_flexores_muneca_final_derecha;
    }

    public function setFlexibilidadMunecaFinalDerecha(?string $flexibilidad_flexores_muneca_final_derecha): self
    {
        $this->flexibilidad_flexores_muneca_final_derecha = $flexibilidad_flexores_muneca_final_derecha;

        return $this;
    }

    public function getFlexibilidadMunecaInicialIzquierda(): ?string
    {
        return $this->flexibilidad_flexores_muneca_inicial_izquierda;
    }

    public function setFlexibilidadMunecaInicialIzquierda(?string $flexibilidad_flexores_muneca_inicial_izquierda): self
    {
        $this->flexibilidad_flexores_muneca_inicial_izquierda = $flexibilidad_flexores_muneca_inicial_izquierda;

        return $this;
    }

    public function getFlexibilidadMunecaFinalIzquierda(): ?string
    {
        return $this->flexibilidad_flexores_muneca_final_izquierda;
    }

    public function setFlexibilidadMunecaFinalIzquierda(?string $flexibilidad_flexores_muneca_final_izquierda): self
    {
        $this->flexibilidad_flexores_muneca_final_izquierda = $flexibilidad_flexores_muneca_final_izquierda;

        return $this;
    }

    public function getFlexibilidadExtensoresMunecaInicialDerecha(): ?string
    {
        return $this->flexibilidad_extensores_muneca_inicial_derecha;
    }

    public function setFlexibilidadExtensoresMunecaInicialDerecha(?string $flexibilidad_extensores_muneca_inicial_derecha): self
    {
        $this->flexibilidad_extensores_muneca_inicial_derecha = $flexibilidad_extensores_muneca_inicial_derecha;

        return $this;
    }

    public function getFlexibilidadExtensoresMunecaFinalDerecha(): ?string
    {
        return $this->flexibilidad_extensores_muneca_final_derecha;
    }

    public function setFlexibilidadExtensoresMunecaFinalDerecha(?string $flexibilidad_extensores_muneca_final_derecha): self
    {
        $this->flexibilidad_extensores_muneca_final_derecha = $flexibilidad_extensores_muneca_final_derecha;

        return $this;
    }

    public function getFlexibilidadExtensoresMunecaInicialIzquierda(): ?string
    {
        return $this->flexibilidad_extensores_muneca_inicial_izquierda;
    }

    public function setFlexibilidadExtensoresMunecaInicialIzquierda(?string $flexibilidad_extensores_muneca_inicial_izquierda): self
    {
        $this->flexibilidad_extensores_muneca_inicial_izquierda = $flexibilidad_extensores_muneca_inicial_izquierda;

        return $this;
    }

    public function getFlexibilidadExtensoresMunecaFinalIzquierda(): ?string
    {
        return $this->flexibilidad_extensores_muneca_final_izquierda;
    }

    public function setFlexibilidadExtensoresMunecaFinalIzquierda(?string $flexibilidad_extensores_muneca_final_izquierda): self
    {
        $this->flexibilidad_extensores_muneca_final_izquierda = $flexibilidad_extensores_muneca_final_izquierda;

        return $this;
    }

    public function getFlexibilidadIntrinsecosManoInicialDerecha(): ?string
    {
        return $this->flexibilidad_intrinsecos_mano_inicial_derecha;
    }

    public function setFlexibilidadIntrinsecosManoInicialDerecha(?string $flexibilidad_intrinsecos_mano_inicial_derecha): self
    {
        $this->flexibilidad_intrinsecos_mano_inicial_derecha = $flexibilidad_intrinsecos_mano_inicial_derecha;

        return $this;
    }

    public function getFlexibilidadIntrinsecosManoFinalDerecha(): ?string
    {
        return $this->flexibilidad_intrinsecos_mano_final_derecha;
    }

    public function setFlexibilidadIntrinsecosManoFinalDerecha(?string $flexibilidad_intrinsecos_mano_final_derecha): self
    {
        $this->flexibilidad_intrinsecos_mano_final_derecha = $flexibilidad_intrinsecos_mano_final_derecha;

        return $this;
    }

    public function getFlexibilidadIntrinsecosManoInicialIzquierda(): ?string
    {
        return $this->flexibilidad_intrinsecos_mano_inicial_izquierda;
    }

    public function setFlexibilidadIntrinsecosManoInicialIzquierda(?string $flexibilidad_intrinsecos_mano_inicial_izquierda): self
    {
        $this->flexibilidad_intrinsecos_mano_inicial_izquierda = $flexibilidad_intrinsecos_mano_inicial_izquierda;

        return $this;
    }

    public function getFlexibilidadIntrinsecosManoFinalIzquierda(): ?string
    {
        return $this->flexibilidad_intrinsecos_mano_final_izquierda;
    }

    public function setFlexibilidadIntrinsecosManoFinalIzquierda(?string $flexibilidad_intrinsecos_mano_final_izquierda): self
    {
        $this->flexibilidad_intrinsecos_mano_final_izquierda = $flexibilidad_intrinsecos_mano_final_izquierda;

        return $this;
    }

    public function getPrueEspecTinelMedianoInicialDerecha(): ?string
    {
        return $this->prue_espec_tinel_mediano_inicial_derecha;
    }

    public function setPrueEspecTinelMedianoInicialDerecha(?string $prue_espec_tinel_mediano_inicial_derecha): self
    {
        $this->prue_espec_tinel_mediano_inicial_derecha = $prue_espec_tinel_mediano_inicial_derecha;

        return $this;
    }

    public function getPrueEspecTinelMedianoFinalDerecha(): ?string
    {
        return $this->prue_espec_tinel_mediano_final_derecha;
    }

    public function setPrueEspecTinelMedianoFinalDerecha(?string $prue_espec_tinel_mediano_final_derecha): self
    {
        $this->prue_espec_tinel_mediano_final_derecha = $prue_espec_tinel_mediano_final_derecha;

        return $this;
    }

    public function getPrueEspecTinelMedianoInicialIzquierda(): ?string
    {
        return $this->prue_espec_tinel_mediano_inicial_izquierda;
    }

    public function setPrueEspecTinelMedianoInicialIzquierda(?string $prue_espec_tinel_mediano_inicial_izquierda): self
    {
        $this->prue_espec_tinel_mediano_inicial_izquierda = $prue_espec_tinel_mediano_inicial_izquierda;

        return $this;
    }

    public function getPrueEspecTinelMedianoFinalIzquierda(): ?string
    {
        return $this->prue_espec_tinel_mediano_final_izquierda;
    }

    public function setPrueEspecTinelMedianoFinalIzquierda(?string $prue_espec_tinel_mediano_final_izquierda): self
    {
        $this->prue_espec_tinel_mediano_final_izquierda = $prue_espec_tinel_mediano_final_izquierda;

        return $this;
    }

    public function getPrueEspecPhalenInicialDerecha(): ?string
    {
        return $this->prue_espec_phalen_inicial_derecha;
    }

    public function setPrueEspecPhalenInicialDerecha(?string $prue_espec_phalen_inicial_derecha): self
    {
        $this->prue_espec_phalen_inicial_derecha = $prue_espec_phalen_inicial_derecha;

        return $this;
    }

    public function getPrueEspecPhalenFinalDerecha(): ?string
    {
        return $this->prue_espec_phalen_final_derecha;
    }

    public function setPrueEspecPhalenFinalDerecha(?string $prue_espec_phalen_final_derecha): self
    {
        $this->prue_espec_phalen_final_derecha = $prue_espec_phalen_final_derecha;

        return $this;
    }

    public function getPrueEspecPhalenInicialIzquierda(): ?string
    {
        return $this->prue_espec_phalen_inicial_izquierda;
    }

    public function setPrueEspecPhalenInicialIzquierda(?string $prue_espec_phalen_inicial_izquierda): self
    {
        $this->prue_espec_phalen_inicial_izquierda = $prue_espec_phalen_inicial_izquierda;

        return $this;
    }

    public function getPrueEspecPhalenFinalIzquierda(): ?string
    {
        return $this->prue_espec_phalen_final_izquierda;
    }

    public function setPrueEspecPhalenFinalIzquierda(?string $prue_espec_phalen_final_izquierda): self
    {
        $this->prue_espec_phalen_final_izquierda = $prue_espec_phalen_final_izquierda;

        return $this;
    }

    public function getPrueEspecFilkesteinInicialDerecha(): ?string
    {
        return $this->prue_espec_filkestein_inicial_derecha;
    }

    public function setPrueEspecFilkesteinInicialDerecha(?string $prue_espec_filkestein_inicial_derecha): self
    {
        $this->prue_espec_filkestein_inicial_derecha = $prue_espec_filkestein_inicial_derecha;

        return $this;
    }

    public function getPrueEspecFilkesteinFinalDerecha(): ?string
    {
        return $this->prue_espec_filkestein_final_derecha;
    }

    public function setPrueEspecFilkesteinFinalDerecha(?string $prue_espec_filkestein_final_derecha): self
    {
        $this->prue_espec_filkestein_final_derecha = $prue_espec_filkestein_final_derecha;

        return $this;
    }

    public function getPrueEspecFilkesteinInicialIzquierda(): ?string
    {
        return $this->prue_espec_filkestein_inicial_izquierda;
    }

    public function setPrueEspecFilkesteinInicialIzquierda(string $prue_espec_filkestein_inicial_izquierda): self
    {
        $this->prue_espec_filkestein_inicial_izquierda = $prue_espec_filkestein_inicial_izquierda;

        return $this;
    }

    public function getPrueEspecFilkesteinFinalIzquierda(): ?string
    {
        return $this->prue_espec_filkestein_final_izquierda;
    }

    public function setPrueEspecFilkesteinFinalIzquierda(?string $prue_espec_filkestein_final_izquierda): self
    {
        $this->prue_espec_filkestein_final_izquierda = $prue_espec_filkestein_final_izquierda;

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

    public function getTecnFacilBobath(): ?bool
    {
        return $this->tecn_facil_bobath;
    }

    public function setTecnFacilBobath(?bool $tecn_facil_bobath): self
    {
        $this->tecn_facil_bobath = $tecn_facil_bobath;

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
