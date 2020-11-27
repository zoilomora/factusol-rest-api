<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Persistence;

final class F_PCL
{
    public const TABLE_NAME = 'F_PCL';

    /** @var string Nº de serie */
    public const TIPPCL = 'F_PCL.TIPPCL';

    /** @var string [F=000000]Código */
    public const CODPCL = 'F_PCL.CODPCL';

    /** @var string Referencia */
    public const REFPCL = 'F_PCL.REFPCL';

    /** @var string Fecha */
    public const FECPCL = 'F_PCL.FECPCL';

    /** @var string [F=00000]Agente */
    public const AGEPCL = 'F_PCL.AGEPCL';

    /** @var string Proveedor del cliente */
    public const PROPCL = 'F_PCL.PROPCL';

    /** @var string [F=00000]Cliente */
    public const CLIPCL = 'F_PCL.CLIPCL';

    /** @var string Nombre */
    public const CNOPCL = 'F_PCL.CNOPCL';

    /** @var string Domicilio */
    public const CDOPCL = 'F_PCL.CDOPCL';

    /** @var string Población */
    public const CPOPCL = 'F_PCL.CPOPCL';

    /** @var string Cód. Postal */
    public const CCPPCL = 'F_PCL.CCPPCL';

    /** @var string Provincia */
    public const CPRPCL = 'F_PCL.CPRPCL';

    /** @var string N.I.F. */
    public const CNIPCL = 'F_PCL.CNIPCL';

    /** @var string [L=#0;Con IVA#1;Sin IVA#2;Intracomunitario#3;Importación]Tipo de IVA */
    public const TIVPCL = 'F_PCL.TIVPCL';

    /** @var string [L=#No#1;Sí]Recargo de equivalencia */
    public const REQPCL = 'F_PCL.REQPCL';

    /** @var string Teléfono */
    public const TELPCL = 'F_PCL.TELPCL';

    /** @var string [L=#0;Pte.#1;Pte. Parcial#2;Enviado#3;En almacén]Estado */
    public const ESTPCL = 'F_PCL.ESTPCL';

    /** @var string Almacén */
    public const ALMPCL = 'F_PCL.ALMPCL';

    /** @var string Neto 1 */
    public const NET1PCL = 'F_PCL.NET1PCL';

    /** @var string Neto 2 */
    public const NET2PCL = 'F_PCL.NET2PCL';

    /** @var string Neto 3 */
    public const NET3PCL = 'F_PCL.NET3PCL';

    /** @var string Porcentaje de descuento 1 */
    public const PDTO1PCL = 'F_PCL.PDTO1PCL';

    /** @var string Porcentaje de descuento 2 */
    public const PDTO2PCL = 'F_PCL.PDTO2PCL';

    /** @var string Porcentaje de descuento 3 */
    public const PDTO3PCL = 'F_PCL.PDTO3PCL';

    /** @var string Importe de descuento 1 */
    public const IDTO1PCL = 'F_PCL.IDTO1PCL';

    /** @var string Importe de descuento 2 */
    public const IDTO2PCL = 'F_PCL.IDTO2PCL';

    /** @var string Importe de descuento 3 */
    public const IDTO3PCL = 'F_PCL.IDTO3PCL';

    /** @var string Porcentaje de pronto pago 1 */
    public const PPPA1PCL = 'F_PCL.PPPA1PCL';

    /** @var string Porcentaje de pronto pago 2 */
    public const PPPA2PCL = 'F_PCL.PPPA2PCL';

    /** @var string Porcentaje de pronto pago 3 */
    public const PPPA3PCL = 'F_PCL.PPPA3PCL';

    /** @var string Importe de pronto pago 1 */
    public const IPPA1PCL = 'F_PCL.IPPA1PCL';

    /** @var string Importe de pronto pago 2 */
    public const IPPA2PCL = 'F_PCL.IPPA2PCL';

    /** @var string Importe de pronto pago 3 */
    public const IPPA3PCL = 'F_PCL.IPPA3PCL';

    /** @var string Porcentaje de portes 1 */
    public const PPOR1PCL = 'F_PCL.PPOR1PCL';

    /** @var string Porcentaje de portes 2 */
    public const PPOR2PCL = 'F_PCL.PPOR2PCL';

    /** @var string Porcentaje de portes 3 */
    public const PPOR3PCL = 'F_PCL.PPOR3PCL';

    /** @var string Importe de portes 1 */
    public const IPOR1PCL = 'F_PCL.IPOR1PCL';

    /** @var string Importe de portes 2 */
    public const IPOR2PCL = 'F_PCL.IPOR2PCL';

    /** @var string Importe de portes 3 */
    public const IPOR3PCL = 'F_PCL.IPOR3PCL';

    /** @var string Porcentaje de financiación 1 */
    public const PFIN1PCL = 'F_PCL.PFIN1PCL';

    /** @var string Porcentaje de financiación 2 */
    public const PFIN2PCL = 'F_PCL.PFIN2PCL';

    /** @var string Porcentaje de financiación 3 */
    public const PFIN3PCL = 'F_PCL.PFIN3PCL';

    /** @var string Importe de financiación 1 */
    public const IFIN1PCL = 'F_PCL.IFIN1PCL';

    /** @var string Importe de financiación 2 */
    public const IFIN2PCL = 'F_PCL.IFIN2PCL';

    /** @var string Importe de financiación 3 */
    public const IFIN3PCL = 'F_PCL.IFIN3PCL';

    /** @var string Base imponible 1 */
    public const BAS1PCL = 'F_PCL.BAS1PCL';

    /** @var string Base imponible 2 */
    public const BAS2PCL = 'F_PCL.BAS2PCL';

    /** @var string Base imponible 3 */
    public const BAS3PCL = 'F_PCL.BAS3PCL';

    /** @var string Porcentaje de impuestos 1 */
    public const PIVA1PCL = 'F_PCL.PIVA1PCL';

    /** @var string Porcentaje de impuestos 2 */
    public const PIVA2PCL = 'F_PCL.PIVA2PCL';

    /** @var string Porcentaje de impuestos 3 */
    public const PIVA3PCL = 'F_PCL.PIVA3PCL';

    /** @var string Importe de impuestos 1 */
    public const IIVA1PCL = 'F_PCL.IIVA1PCL';

    /** @var string Importe de impuestos 2 */
    public const IIVA2PCL = 'F_PCL.IIVA2PCL';

    /** @var string Importe de impuestos 3 */
    public const IIVA3PCL = 'F_PCL.IIVA3PCL';

    /** @var string Porcentaje de recargo de equivalencia 1 */
    public const PREC1PCL = 'F_PCL.PREC1PCL';

    /** @var string Porcentaje de recargo de equivalencia 2 */
    public const PREC2PCL = 'F_PCL.PREC2PCL';

    /** @var string Porcentaje de recargo de equivalencia 3 */
    public const PREC3PCL = 'F_PCL.PREC3PCL';

    /** @var string Importe de recargo de equivalencia 1 */
    public const IREC1PCL = 'F_PCL.IREC1PCL';

    /** @var string Importe de recargo de equivalencia 2 */
    public const IREC2PCL = 'F_PCL.IREC2PCL';

    /** @var string Importe de recargo de equivalencia 3 */
    public const IREC3PCL = 'F_PCL.IREC3PCL';

    /** @var string Porcentaje de retención */
    public const PRET1PCL = 'F_PCL.PRET1PCL';

    /** @var string Importe de retención */
    public const IRET1PCL = 'F_PCL.IRET1PCL';

    /** @var string Total */
    public const TOTPCL = 'F_PCL.TOTPCL';

    /** @var string Forma de pago */
    public const FOPPCL = 'F_PCL.FOPPCL';

    /** @var string Plazo de entrega */
    public const PENPCL = 'F_PCL.PENPCL';

    /** @var string [L=#0;Pagados#1;Debidos]Portes */
    public const PRTPCL = 'F_PCL.PRTPCL';

    /** @var string Portes (texto) */
    public const TPOPCL = 'F_PCL.TPOPCL';

    /** @var string Línea 1 de observaciones */
    public const OB1PCL = 'F_PCL.OB1PCL';

    /** @var string Línea 2 de observaciones */
    public const OB2PCL = 'F_PCL.OB2PCL';

    /** @var string Código de la dirección de entrega */
    public const OBRPCL = 'F_PCL.OBRPCL';

    /** @var string Pedido por */
    public const PPOPCL = 'F_PCL.PPOPCL';

    /** @var string [E]CAMPO PARA ANOTACIONES PRIVADAS DEL DOCUMENTO */
    public const PRIPCL = 'F_PCL.PRIPCL';

    /** @var string [E]DOCUMENTOS EXTERNOS ASOCIADOS AL DOCUMENTO. */
    public const ASOPCL = 'F_PCL.ASOPCL';

    /** @var string [E]COMENTARIOS DESPUES DE LÍNEAS DE DETALLE */
    public const COMPCL = 'F_PCL.COMPCL';

    /** @var string Código del usuario que creó el documento */
    public const USUPCL = 'F_PCL.USUPCL';

    /** @var string Código del último usuario que creó el documento */
    public const USMPCL = 'F_PCL.USMPCL';

    /** @var string Fax */
    public const FAXPCL = 'F_PCL.FAXPCL';

    /** @var string Neto (Exento de impuestos) */
    public const NET4PCL = 'F_PCL.NET4PCL';

    /** @var string Porcentaje de descuento (Exento de impuestos) */
    public const PDTO4PCL = 'F_PCL.PDTO4PCL';

    /** @var string Importe de descuento (Exento de impuestos) */
    public const IDTO4PCL = 'F_PCL.IDTO4PCL';

    /** @var string Porcentaje de pronto pago (Exento de impuestos) */
    public const PPPA4PCL = 'F_PCL.PPPA4PCL';

    /** @var string Importe de pronto pago (Exento de impuestos) */
    public const IPPA4PCL = 'F_PCL.IPPA4PCL';

    /** @var string Porcentaje de portes (Exento de impuestos) */
    public const PPOR4PCL = 'F_PCL.PPOR4PCL';

    /** @var string Importe de portes (Exento de impuestos) */
    public const IPOR4PCL = 'F_PCL.IPOR4PCL';

    /** @var string Porcentaje de financiación (Exento de impuestos) */
    public const PFIN4PCL = 'F_PCL.PFIN4PCL';

    /** @var string Importe de financiación (Exento de impuestos) */
    public const IFIN4PCL = 'F_PCL.IFIN4PCL';

    /** @var string Base imponible (Exento de impuestos) */
    public const BAS4PCL = 'F_PCL.BAS4PCL';

    /** @var string [E]Enviado por e-mail */
    public const EMAPCL = 'F_PCL.EMAPCL';

    /** @var string [E]Permisos y contraseña del documento */
    public const PASPCL = 'F_PCL.PASPCL';

    /** @var string [F=hh:mm]Hora */
    public const HORPCL = 'F_PCL.HORPCL';

    /** @var string E-mail de destino */
    public const CEMPCL = 'F_PCL.CEMPCL';

    /** @var string País del cliente */
    public const CPAPCL = 'F_PCL.CPAPCL';

    /** @var string [L=#0;No#1;Sí]Pedido con incidencia */
    public const INCPCL = 'F_PCL.INCPCL';

    /** @var string [E]Tipo de iva al que pertenece el neto 1 (0 a 6) */
    public const TIVA1PCL = 'F_PCL.TIVA1PCL';

    /** @var string [E]Tipo de iva al que pertenece el neto 2 (0 a 6) */
    public const TIVA2PCL = 'F_PCL.TIVA2PCL';

    /** @var string [E]Tipo de iva al que pertenece el neto 3 (0 a 6) */
    public const TIVA3PCL = 'F_PCL.TIVA3PCL';

    /** @var string [F=000]Código del transportista */
    public const TRNPCL = 'F_PCL.TRNPCL';

    public const TPVIDPCL = 'F_PCL.TPVIDPCL';

    public const TERPCL = 'F_PCL.TERPCL';

    public const IMPPCL = 'F_PCL.IMPPCL';

    public const CEWPCL = 'F_PCL.CEWPCL';
}
