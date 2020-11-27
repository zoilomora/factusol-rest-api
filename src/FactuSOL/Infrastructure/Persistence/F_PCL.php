<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Persistence;

final class F_PCL
{
    public const TABLE_NAME = 'F_PCL';

    /** @var string Nº de serie */
    public const TIPPCL = 'TIPPCL';

    /** @var string [F=000000]Código */
    public const CODPCL = 'CODPCL';

    /** @var string Referencia */
    public const REFPCL = 'REFPCL';

    /** @var string Fecha */
    public const FECPCL = 'FECPCL';

    /** @var string [F=00000]Agente */
    public const AGEPCL = 'AGEPCL';

    /** @var string Proveedor del cliente */
    public const PROPCL = 'PROPCL';

    /** @var string [F=00000]Cliente */
    public const CLIPCL = 'CLIPCL';

    /** @var string Nombre */
    public const CNOPCL = 'CNOPCL';

    /** @var string Domicilio */
    public const CDOPCL = 'CDOPCL';

    /** @var string Población */
    public const CPOPCL = 'CPOPCL';

    /** @var string Cód. Postal */
    public const CCPPCL = 'CCPPCL';

    /** @var string Provincia */
    public const CPRPCL = 'CPRPCL';

    /** @var string N.I.F. */
    public const CNIPCL = 'CNIPCL';

    /** @var string [L=#0;Con IVA#1;Sin IVA#2;Intracomunitario#3;Importación]Tipo de IVA */
    public const TIVPCL = 'TIVPCL';

    /** @var string [L=#No#1;Sí]Recargo de equivalencia */
    public const REQPCL = 'REQPCL';

    /** @var string Teléfono */
    public const TELPCL = 'TELPCL';

    /** @var string [L=#0;Pte.#1;Pte. Parcial#2;Enviado#3;En almacén]Estado */
    public const ESTPCL = 'ESTPCL';

    /** @var string Almacén */
    public const ALMPCL = 'ALMPCL';

    /** @var string Neto 1 */
    public const NET1PCL = 'NET1PCL';

    /** @var string Neto 2 */
    public const NET2PCL = 'NET2PCL';

    /** @var string Neto 3 */
    public const NET3PCL = 'NET3PCL';

    /** @var string Porcentaje de descuento 1 */
    public const PDTO1PCL = 'PDTO1PCL';

    /** @var string Porcentaje de descuento 2 */
    public const PDTO2PCL = 'PDTO2PCL';

    /** @var string Porcentaje de descuento 3 */
    public const PDTO3PCL = 'PDTO3PCL';

    /** @var string Importe de descuento 1 */
    public const IDTO1PCL = 'IDTO1PCL';

    /** @var string Importe de descuento 2 */
    public const IDTO2PCL = 'IDTO2PCL';

    /** @var string Importe de descuento 3 */
    public const IDTO3PCL = 'IDTO3PCL';

    /** @var string Porcentaje de pronto pago 1 */
    public const PPPA1PCL = 'PPPA1PCL';

    /** @var string Porcentaje de pronto pago 2 */
    public const PPPA2PCL = 'PPPA2PCL';

    /** @var string Porcentaje de pronto pago 3 */
    public const PPPA3PCL = 'PPPA3PCL';

    /** @var string Importe de pronto pago 1 */
    public const IPPA1PCL = 'IPPA1PCL';

    /** @var string Importe de pronto pago 2 */
    public const IPPA2PCL = 'IPPA2PCL';

    /** @var string Importe de pronto pago 3 */
    public const IPPA3PCL = 'IPPA3PCL';

    /** @var string Porcentaje de portes 1 */
    public const PPOR1PCL = 'PPOR1PCL';

    /** @var string Porcentaje de portes 2 */
    public const PPOR2PCL = 'PPOR2PCL';

    /** @var string Porcentaje de portes 3 */
    public const PPOR3PCL = 'PPOR3PCL';

    /** @var string Importe de portes 1 */
    public const IPOR1PCL = 'IPOR1PCL';

    /** @var string Importe de portes 2 */
    public const IPOR2PCL = 'IPOR2PCL';

    /** @var string Importe de portes 3 */
    public const IPOR3PCL = 'IPOR3PCL';

    /** @var string Porcentaje de financiación 1 */
    public const PFIN1PCL = 'PFIN1PCL';

    /** @var string Porcentaje de financiación 2 */
    public const PFIN2PCL = 'PFIN2PCL';

    /** @var string Porcentaje de financiación 3 */
    public const PFIN3PCL = 'PFIN3PCL';

    /** @var string Importe de financiación 1 */
    public const IFIN1PCL = 'IFIN1PCL';

    /** @var string Importe de financiación 2 */
    public const IFIN2PCL = 'IFIN2PCL';

    /** @var string Importe de financiación 3 */
    public const IFIN3PCL = 'IFIN3PCL';

    /** @var string Base imponible 1 */
    public const BAS1PCL = 'BAS1PCL';

    /** @var string Base imponible 2 */
    public const BAS2PCL = 'BAS2PCL';

    /** @var string Base imponible 3 */
    public const BAS3PCL = 'BAS3PCL';

    /** @var string Porcentaje de impuestos 1 */
    public const PIVA1PCL = 'PIVA1PCL';

    /** @var string Porcentaje de impuestos 2 */
    public const PIVA2PCL = 'PIVA2PCL';

    /** @var string Porcentaje de impuestos 3 */
    public const PIVA3PCL = 'PIVA3PCL';

    /** @var string Importe de impuestos 1 */
    public const IIVA1PCL = 'IIVA1PCL';

    /** @var string Importe de impuestos 2 */
    public const IIVA2PCL = 'IIVA2PCL';

    /** @var string Importe de impuestos 3 */
    public const IIVA3PCL = 'IIVA3PCL';

    /** @var string Porcentaje de recargo de equivalencia 1 */
    public const PREC1PCL = 'PREC1PCL';

    /** @var string Porcentaje de recargo de equivalencia 2 */
    public const PREC2PCL = 'PREC2PCL';

    /** @var string Porcentaje de recargo de equivalencia 3 */
    public const PREC3PCL = 'PREC3PCL';

    /** @var string Importe de recargo de equivalencia 1 */
    public const IREC1PCL = 'IREC1PCL';

    /** @var string Importe de recargo de equivalencia 2 */
    public const IREC2PCL = 'IREC2PCL';

    /** @var string Importe de recargo de equivalencia 3 */
    public const IREC3PCL = 'IREC3PCL';

    /** @var string Porcentaje de retención */
    public const PRET1PCL = 'PRET1PCL';

    /** @var string Importe de retención */
    public const IRET1PCL = 'IRET1PCL';

    /** @var string Total */
    public const TOTPCL = 'TOTPCL';

    /** @var string Forma de pago */
    public const FOPPCL = 'FOPPCL';

    /** @var string Plazo de entrega */
    public const PENPCL = 'PENPCL';

    /** @var string [L=#0;Pagados#1;Debidos]Portes */
    public const PRTPCL = 'PRTPCL';

    /** @var string Portes (texto) */
    public const TPOPCL = 'TPOPCL';

    /** @var string Línea 1 de observaciones */
    public const OB1PCL = 'OB1PCL';

    /** @var string Línea 2 de observaciones */
    public const OB2PCL = 'OB2PCL';

    /** @var string Código de la dirección de entrega */
    public const OBRPCL = 'OBRPCL';

    /** @var string Pedido por */
    public const PPOPCL = 'PPOPCL';

    /** @var string [E]CAMPO PARA ANOTACIONES PRIVADAS DEL DOCUMENTO */
    public const PRIPCL = 'PRIPCL';

    /** @var string [E]DOCUMENTOS EXTERNOS ASOCIADOS AL DOCUMENTO. */
    public const ASOPCL = 'ASOPCL';

    /** @var string [E]COMENTARIOS DESPUES DE LÍNEAS DE DETALLE */
    public const COMPCL = 'COMPCL';

    /** @var string Código del usuario que creó el documento */
    public const USUPCL = 'USUPCL';

    /** @var string Código del último usuario que creó el documento */
    public const USMPCL = 'USMPCL';

    /** @var string Fax */
    public const FAXPCL = 'FAXPCL';

    /** @var string Neto (Exento de impuestos) */
    public const NET4PCL = 'NET4PCL';

    /** @var string Porcentaje de descuento (Exento de impuestos) */
    public const PDTO4PCL = 'PDTO4PCL';

    /** @var string Importe de descuento (Exento de impuestos) */
    public const IDTO4PCL = 'IDTO4PCL';

    /** @var string Porcentaje de pronto pago (Exento de impuestos) */
    public const PPPA4PCL = 'PPPA4PCL';

    /** @var string Importe de pronto pago (Exento de impuestos) */
    public const IPPA4PCL = 'IPPA4PCL';

    /** @var string Porcentaje de portes (Exento de impuestos) */
    public const PPOR4PCL = 'PPOR4PCL';

    /** @var string Importe de portes (Exento de impuestos) */
    public const IPOR4PCL = 'IPOR4PCL';

    /** @var string Porcentaje de financiación (Exento de impuestos) */
    public const PFIN4PCL = 'PFIN4PCL';

    /** @var string Importe de financiación (Exento de impuestos) */
    public const IFIN4PCL = 'IFIN4PCL';

    /** @var string Base imponible (Exento de impuestos) */
    public const BAS4PCL = 'BAS4PCL';

    /** @var string [E]Enviado por e-mail */
    public const EMAPCL = 'EMAPCL';

    /** @var string [E]Permisos y contraseña del documento */
    public const PASPCL = 'PASPCL';

    /** @var string [F=hh:mm]Hora */
    public const HORPCL = 'HORPCL';

    /** @var string E-mail de destino */
    public const CEMPCL = 'CEMPCL';

    /** @var string País del cliente */
    public const CPAPCL = 'CPAPCL';

    /** @var string [L=#0;No#1;Sí]Pedido con incidencia */
    public const INCPCL = 'INCPCL';

    /** @var string [E]Tipo de iva al que pertenece el neto 1 (0 a 6) */
    public const TIVA1PCL = 'TIVA1PCL';

    /** @var string [E]Tipo de iva al que pertenece el neto 2 (0 a 6) */
    public const TIVA2PCL = 'TIVA2PCL';

    /** @var string [E]Tipo de iva al que pertenece el neto 3 (0 a 6) */
    public const TIVA3PCL = 'TIVA3PCL';

    /** @var string [F=000]Código del transportista */
    public const TRNPCL = 'TRNPCL';

    public const TPVIDPCL = 'TPVIDPCL';

    public const TERPCL = 'TERPCL';

    public const IMPPCL = 'IMPPCL';

    public const CEWPCL = 'CEWPCL';
}
