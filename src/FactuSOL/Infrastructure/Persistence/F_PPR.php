<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Persistence;

final class F_PPR
{
    public const TABLE_NAME = 'F_PPR';

    /** @var string Nº de serie */
    public const TIPPPR = 'F_PPR.TIPPPR';

    /** @var string [F=000000]Código */
    public const CODPPR = 'F_PPR.CODPPR';

    /** @var string Referencia */
    public const REFPPR = 'F_PPR.REFPPR';

    /** @var string Fecha */
    public const FECPPR = 'F_PPR.FECPPR';

    /** @var string [F=00000]Proveedor */
    public const PROPPR = 'F_PPR.PROPPR';

    /** @var string [L=#0;Pte. de recibir#1;Pte parcial#2;Recibido]Estado */
    public const ESTPPR = 'F_PPR.ESTPPR';

    /** @var string Almacén */
    public const ALMPPR = 'F_PPR.ALMPPR';

    /** @var string Cliente del proveedor */
    public const CLIPPR = 'F_PPR.CLIPPR';

    /** @var string Nombre */
    public const PNOPPR = 'F_PPR.PNOPPR';

    /** @var string Domicilio */
    public const PDOPPR = 'F_PPR.PDOPPR';

    /** @var string Población */
    public const PPOPPR = 'F_PPR.PPOPPR';

    /** @var string Cód. Postal */
    public const PCPPPR = 'F_PPR.PCPPPR';

    /** @var string Provincia */
    public const PPRPPR = 'F_PPR.PPRPPR';

    /** @var string N.I.F. */
    public const PNIPPR = 'F_PPR.PNIPPR';

    /** @var string [L=#0;Con IVA#1;Sin IVA#2;Intracomunitario#3;Importación]Tipo de IVA */
    public const TIVPPR = 'F_PPR.TIVPPR';

    /** @var string [L=#No#1;Sí]Recargo de equivalencia */
    public const REQPPR = 'F_PPR.REQPPR';

    /** @var string Teléfono */
    public const PTEPPR = 'F_PPR.PTEPPR';

    /** @var string Neto 1 */
    public const NET1PPR = 'F_PPR.NET1PPR';

    /** @var string Neto 2 */
    public const NET2PPR = 'F_PPR.NET2PPR';

    /** @var string Neto 3 */
    public const NET3PPR = 'F_PPR.NET3PPR';

    /** @var string Porcentaje de descuento 1 */
    public const PDTO1PPR = 'F_PPR.PDTO1PPR';

    /** @var string Porcentaje de descuento 2 */
    public const PDTO2PPR = 'F_PPR.PDTO2PPR';

    /** @var string Porcentaje de descuento 3 */
    public const PDTO3PPR = 'F_PPR.PDTO3PPR';

    /** @var string Importe de descuento 1 */
    public const IDTO1PPR = 'F_PPR.IDTO1PPR';

    /** @var string Importe de descuento 2 */
    public const IDTO2PPR = 'F_PPR.IDTO2PPR';

    /** @var string Importe de descuento 3 */
    public const IDTO3PPR = 'F_PPR.IDTO3PPR';

    /** @var string Porcentaje de pronto pago 1 */
    public const PPPA1PPR = 'F_PPR.PPPA1PPR';

    /** @var string Porcentaje de pronto pago 2 */
    public const PPPA2PPR = 'F_PPR.PPPA2PPR';

    /** @var string Porcentaje de pronto pago 3 */
    public const PPPA3PPR = 'F_PPR.PPPA3PPR';

    /** @var string Importe de pronto pago 1 */
    public const IPPA1PPR = 'F_PPR.IPPA1PPR';

    /** @var string Importe de pronto pago 2 */
    public const IPPA2PPR = 'F_PPR.IPPA2PPR';

    /** @var string Importe de pronto pago 3 */
    public const IPPA3PPR = 'F_PPR.IPPA3PPR';

    /** @var string Porcentaje de portes 1 */
    public const PPOR1PPR = 'F_PPR.PPOR1PPR';

    /** @var string Porcentaje de portes 2 */
    public const PPOR2PPR = 'F_PPR.PPOR2PPR';

    /** @var string Porcentaje de portes 3 */
    public const PPOR3PPR = 'F_PPR.PPOR3PPR';

    /** @var string Importe de portes 1 */
    public const IPOR1PPR = 'F_PPR.IPOR1PPR';

    /** @var string Importe de portes 2 */
    public const IPOR2PPR = 'F_PPR.IPOR2PPR';

    /** @var string Importe de portes 3 */
    public const IPOR3PPR = 'F_PPR.IPOR3PPR';

    /** @var string Porcentaje de financiación 1 */
    public const PFIN1PPR = 'F_PPR.PFIN1PPR';

    /** @var string Porcentaje de financiación 2 */
    public const PFIN2PPR = 'F_PPR.PFIN2PPR';

    /** @var string Porcentaje de financiación 3 */
    public const PFIN3PPR = 'F_PPR.PFIN3PPR';

    /** @var string Importe de financiación 1 */
    public const IFIN1PPR = 'F_PPR.IFIN1PPR';

    /** @var string Importe de financiación 2 */
    public const IFIN2PPR = 'F_PPR.IFIN2PPR';

    /** @var string Importe de financiación 3 */
    public const IFIN3PPR = 'F_PPR.IFIN3PPR';

    /** @var string Base imponible 1 */
    public const BAS1PPR = 'F_PPR.BAS1PPR';

    /** @var string Base imponible 2 */
    public const BAS2PPR = 'F_PPR.BAS2PPR';

    /** @var string Base imponible 3 */
    public const BAS3PPR = 'F_PPR.BAS3PPR';

    /** @var string Porcentaje de impuestos 1 */
    public const PIVA1PPR = 'F_PPR.PIVA1PPR';

    /** @var string Porcentaje de impuestos 2 */
    public const PIVA2PPR = 'F_PPR.PIVA2PPR';

    /** @var string Porcentaje de impuestos 3 */
    public const PIVA3PPR = 'F_PPR.PIVA3PPR';

    /** @var string Importe de impuestos 1 */
    public const IIVA1PPR = 'F_PPR.IIVA1PPR';

    /** @var string Importe de impuestos 2 */
    public const IIVA2PPR = 'F_PPR.IIVA2PPR';

    /** @var string Importe de impuestos 3 */
    public const IIVA3PPR = 'F_PPR.IIVA3PPR';

    /** @var string Porcentaje de recargo de equivalencia 1 */
    public const PREC1PPR = 'F_PPR.PREC1PPR';

    /** @var string Porcentaje de recargo de equivalencia 2 */
    public const PREC2PPR = 'F_PPR.PREC2PPR';

    /** @var string Porcentaje de recargo de equivalencia 3 */
    public const PREC3PPR = 'F_PPR.PREC3PPR';

    /** @var string Importe de recargo de equivalencia 1 */
    public const IREC1PPR = 'F_PPR.IREC1PPR';

    /** @var string Importe de recargo de equivalencia 2 */
    public const IREC2PPR = 'F_PPR.IREC2PPR';

    /** @var string Importe de recargo de equivalencia 3 */
    public const IREC3PPR = 'F_PPR.IREC3PPR';

    /** @var string Porcentaje de retención 1 */
    public const PRET1PPR = 'F_PPR.PRET1PPR';

    /** @var string Importe de retención 1 */
    public const IRET1PPR = 'F_PPR.IRET1PPR';

    /** @var string Total */
    public const TOTPPR = 'F_PPR.TOTPPR';

    /** @var string Forma de pago */
    public const FOPPPR = 'F_PPR.FOPPPR';

    /** @var string Plazo de entrega */
    public const PENPPR = 'F_PPR.PENPPR';

    /** @var string A la atención de */
    public const AATPPR = 'F_PPR.AATPPR';

    /** @var string [L=#Pagados#1;Debidos]Portes */
    public const PRTPPR = 'F_PPR.PRTPPR';

    /** @var string Portes (texto) */
    public const TPOPPR = 'F_PPR.TPOPPR';

    /** @var string Línea 1 de observaciones */
    public const OB1PPR = 'F_PPR.OB1PPR';

    /** @var string Línea 2 de observaciones */
    public const OB2PPR = 'F_PPR.OB2PPR';

    /** @var string [E]ENVIADO AL FICHERO DE COMPRAS */
    public const ENVPPR = 'F_PPR.ENVPPR';

    /** @var string [E]COMENTARIOS DESPUÉS DE LÍNEAS DE DETALLE */
    public const COMPPR = 'F_PPR.COMPPR';

    /** @var string Domicilio de la empresa */
    public const EDOPPR = 'F_PPR.EDOPPR';

    /** @var string Cód. Postal de la empresa */
    public const ECPPPR = 'F_PPR.ECPPPR';

    /** @var string Población de la empresa */
    public const EPOPPR = 'F_PPR.EPOPPR';

    /** @var string Provincia de la empresa */
    public const EPRPPR = 'F_PPR.EPRPPR';

    /** @var string Teléfono de la empresa */
    public const ETEPPR = 'F_PPR.ETEPPR';

    /** @var string Código del usuario que creó el documento */
    public const USUPPR = 'F_PPR.USUPPR';

    /** @var string Código del último usuario que modificó el documento */
    public const USMPPR = 'F_PPR.USMPPR';

    /** @var string Neto (Exento de impuestos) */
    public const NET4PPR = 'F_PPR.NET4PPR';

    /** @var string Porcentaje de descuento (Exento de impuestos) */
    public const PDTO4PPR = 'F_PPR.PDTO4PPR';

    /** @var string Importe de descuento (Exento de impuestos) */
    public const IDTO4PPR = 'F_PPR.IDTO4PPR';

    /** @var string Porcentaje de pronto pago (Exento de impuestos) */
    public const PPPA4PPR = 'F_PPR.PPPA4PPR';

    /** @var string Importe de pronto pago (Exento de impuestos) */
    public const IPPA4PPR = 'F_PPR.IPPA4PPR';

    /** @var string Porcentaje de portes (Exento de impuestos) */
    public const PPOR4PPR = 'F_PPR.PPOR4PPR';

    /** @var string Importe de portes (Exento de impuestos) */
    public const IPOR4PPR = 'F_PPR.IPOR4PPR';

    /** @var string Porcentaje de financiación (Exento de impuestos) */
    public const PFIN4PPR = 'F_PPR.PFIN4PPR';

    /** @var string Importe de financiación (Exento de impuestos) */
    public const IFIN4PPR = 'F_PPR.IFIN4PPR';

    /** @var string Base (Exenta de impuestos) */
    public const BAS4PPR = 'F_PPR.BAS4PPR';

    /** @var string [E]Enviado por e-mail */
    public const EMAPPR = 'F_PPR.EMAPPR';

    /** @var string [E]Permisos y contraseña del documento */
    public const PASPPR = 'F_PPR.PASPPR';

    /** @var string E-mail de destino */
    public const PEMPPR = 'F_PPR.PEMPPR';

    /** @var string País del proveedor */
    public const PPAPPR = 'F_PPR.PPAPPR';

    /** @var string [L=#0;No#1;Sí]Pedido con incidencia */
    public const INCPPR = 'F_PPR.INCPPR';

    /** @var string [E]Tipo de iva al que pertenece el neto 1 (0 a 6) */
    public const TIVA1PPR = 'F_PPR.TIVA1PPR';

    /** @var string [E]Tipo de iva al que pertenece el neto 2 (0 a 6) */
    public const TIVA2PPR = 'F_PPR.TIVA2PPR';

    /** @var string [E]Tipo de iva al que pertenece el neto 3 (0 a 6) */
    public const TIVA3PPR = 'F_PPR.TIVA3PPR';
}
