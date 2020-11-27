<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Persistence;

final class F_PPR
{
    public const TABLE_NAME = 'F_PPR';

    /** @var string Nº de serie */
    public const TIPPPR = 'TIPPPR';

    /** @var string [F=000000]Código */
    public const CODPPR = 'CODPPR';

    /** @var string Referencia */
    public const REFPPR = 'REFPPR';

    /** @var string Fecha */
    public const FECPPR = 'FECPPR';

    /** @var string [F=00000]Proveedor */
    public const PROPPR = 'PROPPR';

    /** @var string [L=#0;Pte. de recibir#1;Pte parcial#2;Recibido]Estado */
    public const ESTPPR = 'ESTPPR';

    /** @var string Almacén */
    public const ALMPPR = 'ALMPPR';

    /** @var string Cliente del proveedor */
    public const CLIPPR = 'CLIPPR';

    /** @var string Nombre */
    public const PNOPPR = 'PNOPPR';

    /** @var string Domicilio */
    public const PDOPPR = 'PDOPPR';

    /** @var string Población */
    public const PPOPPR = 'PPOPPR';

    /** @var string Cód. Postal */
    public const PCPPPR = 'PCPPPR';

    /** @var string Provincia */
    public const PPRPPR = 'PPRPPR';

    /** @var string N.I.F. */
    public const PNIPPR = 'PNIPPR';

    /** @var string [L=#0;Con IVA#1;Sin IVA#2;Intracomunitario#3;Importación]Tipo de IVA */
    public const TIVPPR = 'TIVPPR';

    /** @var string [L=#No#1;Sí]Recargo de equivalencia */
    public const REQPPR = 'REQPPR';

    /** @var string Teléfono */
    public const PTEPPR = 'PTEPPR';

    /** @var string Neto 1 */
    public const NET1PPR = 'NET1PPR';

    /** @var string Neto 2 */
    public const NET2PPR = 'NET2PPR';

    /** @var string Neto 3 */
    public const NET3PPR = 'NET3PPR';

    /** @var string Porcentaje de descuento 1 */
    public const PDTO1PPR = 'PDTO1PPR';

    /** @var string Porcentaje de descuento 2 */
    public const PDTO2PPR = 'PDTO2PPR';

    /** @var string Porcentaje de descuento 3 */
    public const PDTO3PPR = 'PDTO3PPR';

    /** @var string Importe de descuento 1 */
    public const IDTO1PPR = 'IDTO1PPR';

    /** @var string Importe de descuento 2 */
    public const IDTO2PPR = 'IDTO2PPR';

    /** @var string Importe de descuento 3 */
    public const IDTO3PPR = 'IDTO3PPR';

    /** @var string Porcentaje de pronto pago 1 */
    public const PPPA1PPR = 'PPPA1PPR';

    /** @var string Porcentaje de pronto pago 2 */
    public const PPPA2PPR = 'PPPA2PPR';

    /** @var string Porcentaje de pronto pago 3 */
    public const PPPA3PPR = 'PPPA3PPR';

    /** @var string Importe de pronto pago 1 */
    public const IPPA1PPR = 'IPPA1PPR';

    /** @var string Importe de pronto pago 2 */
    public const IPPA2PPR = 'IPPA2PPR';

    /** @var string Importe de pronto pago 3 */
    public const IPPA3PPR = 'IPPA3PPR';

    /** @var string Porcentaje de portes 1 */
    public const PPOR1PPR = 'PPOR1PPR';

    /** @var string Porcentaje de portes 2 */
    public const PPOR2PPR = 'PPOR2PPR';

    /** @var string Porcentaje de portes 3 */
    public const PPOR3PPR = 'PPOR3PPR';

    /** @var string Importe de portes 1 */
    public const IPOR1PPR = 'IPOR1PPR';

    /** @var string Importe de portes 2 */
    public const IPOR2PPR = 'IPOR2PPR';

    /** @var string Importe de portes 3 */
    public const IPOR3PPR = 'IPOR3PPR';

    /** @var string Porcentaje de financiación 1 */
    public const PFIN1PPR = 'PFIN1PPR';

    /** @var string Porcentaje de financiación 2 */
    public const PFIN2PPR = 'PFIN2PPR';

    /** @var string Porcentaje de financiación 3 */
    public const PFIN3PPR = 'PFIN3PPR';

    /** @var string Importe de financiación 1 */
    public const IFIN1PPR = 'IFIN1PPR';

    /** @var string Importe de financiación 2 */
    public const IFIN2PPR = 'IFIN2PPR';

    /** @var string Importe de financiación 3 */
    public const IFIN3PPR = 'IFIN3PPR';

    /** @var string Base imponible 1 */
    public const BAS1PPR = 'BAS1PPR';

    /** @var string Base imponible 2 */
    public const BAS2PPR = 'BAS2PPR';

    /** @var string Base imponible 3 */
    public const BAS3PPR = 'BAS3PPR';

    /** @var string Porcentaje de impuestos 1 */
    public const PIVA1PPR = 'PIVA1PPR';

    /** @var string Porcentaje de impuestos 2 */
    public const PIVA2PPR = 'PIVA2PPR';

    /** @var string Porcentaje de impuestos 3 */
    public const PIVA3PPR = 'PIVA3PPR';

    /** @var string Importe de impuestos 1 */
    public const IIVA1PPR = 'IIVA1PPR';

    /** @var string Importe de impuestos 2 */
    public const IIVA2PPR = 'IIVA2PPR';

    /** @var string Importe de impuestos 3 */
    public const IIVA3PPR = 'IIVA3PPR';

    /** @var string Porcentaje de recargo de equivalencia 1 */
    public const PREC1PPR = 'PREC1PPR';

    /** @var string Porcentaje de recargo de equivalencia 2 */
    public const PREC2PPR = 'PREC2PPR';

    /** @var string Porcentaje de recargo de equivalencia 3 */
    public const PREC3PPR = 'PREC3PPR';

    /** @var string Importe de recargo de equivalencia 1 */
    public const IREC1PPR = 'IREC1PPR';

    /** @var string Importe de recargo de equivalencia 2 */
    public const IREC2PPR = 'IREC2PPR';

    /** @var string Importe de recargo de equivalencia 3 */
    public const IREC3PPR = 'IREC3PPR';

    /** @var string Porcentaje de retención 1 */
    public const PRET1PPR = 'PRET1PPR';

    /** @var string Importe de retención 1 */
    public const IRET1PPR = 'IRET1PPR';

    /** @var string Total */
    public const TOTPPR = 'TOTPPR';

    /** @var string Forma de pago */
    public const FOPPPR = 'FOPPPR';

    /** @var string Plazo de entrega */
    public const PENPPR = 'PENPPR';

    /** @var string A la atención de */
    public const AATPPR = 'AATPPR';

    /** @var string [L=#Pagados#1;Debidos]Portes */
    public const PRTPPR = 'PRTPPR';

    /** @var string Portes (texto) */
    public const TPOPPR = 'TPOPPR';

    /** @var string Línea 1 de observaciones */
    public const OB1PPR = 'OB1PPR';

    /** @var string Línea 2 de observaciones */
    public const OB2PPR = 'OB2PPR';

    /** @var string [E]ENVIADO AL FICHERO DE COMPRAS */
    public const ENVPPR = 'ENVPPR';

    /** @var string [E]COMENTARIOS DESPUÉS DE LÍNEAS DE DETALLE */
    public const COMPPR = 'COMPPR';

    /** @var string Domicilio de la empresa */
    public const EDOPPR = 'EDOPPR';

    /** @var string Cód. Postal de la empresa */
    public const ECPPPR = 'ECPPPR';

    /** @var string Población de la empresa */
    public const EPOPPR = 'EPOPPR';

    /** @var string Provincia de la empresa */
    public const EPRPPR = 'EPRPPR';

    /** @var string Teléfono de la empresa */
    public const ETEPPR = 'ETEPPR';

    /** @var string Código del usuario que creó el documento */
    public const USUPPR = 'USUPPR';

    /** @var string Código del último usuario que modificó el documento */
    public const USMPPR = 'USMPPR';

    /** @var string Neto (Exento de impuestos) */
    public const NET4PPR = 'NET4PPR';

    /** @var string Porcentaje de descuento (Exento de impuestos) */
    public const PDTO4PPR = 'PDTO4PPR';

    /** @var string Importe de descuento (Exento de impuestos) */
    public const IDTO4PPR = 'IDTO4PPR';

    /** @var string Porcentaje de pronto pago (Exento de impuestos) */
    public const PPPA4PPR = 'PPPA4PPR';

    /** @var string Importe de pronto pago (Exento de impuestos) */
    public const IPPA4PPR = 'IPPA4PPR';

    /** @var string Porcentaje de portes (Exento de impuestos) */
    public const PPOR4PPR = 'PPOR4PPR';

    /** @var string Importe de portes (Exento de impuestos) */
    public const IPOR4PPR = 'IPOR4PPR';

    /** @var string Porcentaje de financiación (Exento de impuestos) */
    public const PFIN4PPR = 'PFIN4PPR';

    /** @var string Importe de financiación (Exento de impuestos) */
    public const IFIN4PPR = 'IFIN4PPR';

    /** @var string Base (Exenta de impuestos) */
    public const BAS4PPR = 'BAS4PPR';

    /** @var string [E]Enviado por e-mail */
    public const EMAPPR = 'EMAPPR';

    /** @var string [E]Permisos y contraseña del documento */
    public const PASPPR = 'PASPPR';

    /** @var string E-mail de destino */
    public const PEMPPR = 'PEMPPR';

    /** @var string País del proveedor */
    public const PPAPPR = 'PPAPPR';

    /** @var string [L=#0;No#1;Sí]Pedido con incidencia */
    public const INCPPR = 'INCPPR';

    /** @var string [E]Tipo de iva al que pertenece el neto 1 (0 a 6) */
    public const TIVA1PPR = 'TIVA1PPR';

    /** @var string [E]Tipo de iva al que pertenece el neto 2 (0 a 6) */
    public const TIVA2PPR = 'TIVA2PPR';

    /** @var string [E]Tipo de iva al que pertenece el neto 3 (0 a 6) */
    public const TIVA3PPR = 'TIVA3PPR';
}
