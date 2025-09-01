-- reemplazar el insert de

INSERT [dbo].[Facturas_1_2025] ([fa_cia], [fa_codigo], [fa_tipo], [fa_fecha], [fa_hora], [fa_tc], [fa_cliente], [fa_nombre], [fa_correo], [fa_moneda], [fa_estado_hac], [fa_clave_hac], [fa_imp_vts], [fa_imp_cms], [fa_subtotal], [fa_descuentos], [fa_impuestos], [fa_total], [fa_cont_numero], [fa_cont_fecha], [fa_cont_hora], [fa_qr], [fa_codigo_dev], [fa_estado_dev], [fa_estado_anulado], [fa_cons_hac], [fa_condicion], [fa_mediopago], [fa_plazo], [fa_casamatriz], [fa_puntoventa], [fa_xml], [fa_xml_firmado], [fa_json], [fa_json_resp_hac], [fa_resp_hac], [fa_fecha_hacienda], [fa_total_gravado], [fa_total_exento], [fa_cons_hac_real], [fa_ced_receptor], [fa_OrdenCompra], [fa_Observacion], [fa_placa], [fa_autorizacion], [fa_patrimonio], [fa_kilometraje], [fa_articulo], [fa_nombre_articulo], [fa_porc_rete], [fa_porc_adel], [fa_monto_proy], [fa_adelanto], [fa_retencion], [fa_monto_fact], [fa_cantidad], [fa_precio], [fa_unidad_m], [fa_mediopago2], [fa_mediopago3], [fa_mediopago4], [fa_mediopago5], [fa_porc_desc_fac], [fa_preciolitro], [fa_mesero], [fa_ImpServ10], [fa_vendedor], [fa_fch_tabla], [fa_hecho_por], [fa_ctrlvih_placa], [fa_ctrlvih_detalleproblema], [fa_ctrlvih_detallesolucion], [fa_ctrlvih_realizadopor], [fa_ctrlvih_km], [fa_enviado], [fa_reenviado], [fa_imp_iva1], [fa_imp_iva2], [fa_imp_iva4], [fa_imp_iva13], [fa_Otros_Cargos], [fa_Especi_Otros_Cargos], [fa_actividad_economica], [fa_pers_autor_desc], [fa_monto_iva_devuelto], [fa_adjunto], [fa_ruta], [fa_chofer], [fa_fecha_entrega], [fa_asiento], [fa_num_proyecto], [fa_num_fact_interna], [fa_recibir], [fa_recibido], [fa_fch_recibio], [fa_mediopago_recibio], [fa_persona_recibio], [fa_despachar_totalidad], [fa_cobrado_por], [fa_impreso], [fa_codigo_generacion], [fa_cliente_tercero], [fa_codigo_generacion_anulacion], [fa_estado_hac_anulacion], [fa_resp_json_anulacion], [fa_persona_anulacion], [fa_sello_anulacion], [fa_tipo_contingencia], [fa_codigo_generacion_contingencia], [fa_estado_hac_contingencia], [fa_resp_json_contingencia], [fa_persona_contingencia], [fa_fecha_contingencia], [fa_sello_contingencia], [fa_fovial], [fa_cotrans], [fa_identi_doc_asoc], [fa_nombre_conductor], [fa_id_transporte], [fa_incoterms], [fa_cliente1], [fa_nombre1], [fa_aplica_serv_10], [fa_total_nosujeto], [fa_total_renta], [fa_fecha_anulado], [fa_motivo_anulado], [fa_extraordinario], [fa_cod_medico])
a 
INSERT INTO "FacturasAjson" (
  fa_cia, fa_codigo, fa_tipo, fa_fecha, fa_hora, fa_tc, fa_cliente, fa_nombre, fa_correo, fa_moneda, fa_estado_hac,
  fa_clave_hac, fa_imp_vts, fa_imp_cms, fa_subtotal, fa_descuentos, fa_impuestos, fa_total, fa_cont_numero,
  fa_cont_fecha, fa_cont_hora, fa_qr, fa_codigo_dev, fa_estado_dev, fa_estado_anulado, fa_cons_hac, fa_condicion,
  fa_mediopago, fa_plazo, fa_casamatriz, fa_puntoventa, fa_xml, fa_xml_firmado, fa_json, fa_json_resp_hac,
  fa_resp_hac, fa_fecha_hacienda, fa_total_gravado, fa_total_exento, fa_cons_hac_real, fa_ced_receptor,
  "fa_OrdenCompra", "fa_Observacion", fa_placa, fa_autorizacion, fa_patrimonio, fa_kilometraje, fa_articulo,
  fa_nombre_articulo, fa_porc_rete, fa_porc_adel, fa_monto_proy, fa_adelanto, fa_retencion, fa_monto_fact,
  fa_cantidad, fa_precio, fa_unidad_m, fa_mediopago2, fa_mediopago3, fa_mediopago4, fa_mediopago5,
  fa_porc_desc_fac, fa_preciolitro, fa_mesero, "fa_ImpServ10", fa_vendedor, fa_fch_tabla, fa_hecho_por,
  fa_ctrlvih_placa, fa_ctrlvih_detalleproblema, fa_ctrlvih_detallesolucion, fa_ctrlvih_realizadopor, fa_ctrlvih_km,
  fa_enviado, fa_reenviado, fa_imp_iva1, fa_imp_iva2, fa_imp_iva4, fa_imp_iva13, "fa_Otros_Cargos",
  "fa_Especi_Otros_Cargos", fa_actividad_economica, fa_pers_autor_desc, fa_monto_iva_devuelto, fa_adjunto, fa_ruta,
  fa_chofer, fa_fecha_entrega, fa_asiento, fa_num_proyecto, fa_num_fact_interna, fa_recibir, fa_recibido,
  fa_fch_recibio, fa_mediopago_recibio, fa_persona_recibio, fa_despachar_totalidad, fa_cobrado_por, fa_impreso,
  fa_codigo_generacion, fa_cliente_tercero, fa_codigo_generacion_anulacion, fa_estado_hac_anulacion,
  fa_resp_json_anulacion, fa_persona_anulacion, fa_sello_anulacion, fa_tipo_contingencia,
  fa_codigo_generacion_contingencia, fa_estado_hac_contingencia, fa_resp_json_contingencia,
  fa_persona_contingencia, fa_fecha_contingencia, fa_sello_contingencia, fa_fovial, fa_cotrans,
  fa_identi_doc_asoc, fa_nombre_conductor, fa_id_transporte, fa_incoterms, fa_cliente1, fa_nombre1,
  fa_aplica_serv_10, fa_total_nosujeto, fa_total_renta, fa_fecha_anulado, fa_motivo_anulado, fa_extraordinario,
  fa_cod_medico
)


reemplazar:
'CAST('
por
''

reemplazar 
'AS DateTime)'
por
''

reemplazar salto de linea por punto y coma y despues el salto de linea
'
'
por
';
'