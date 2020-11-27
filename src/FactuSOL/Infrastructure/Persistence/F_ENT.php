<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Persistence;

final class F_ENT
{
    public const TABLE_NAME = 'F_ENT';

    /** @var string Nº de serie */
    public const TIPENT = 'F_ENT.TIPENT';

    /** @var string [F=000000]Código */
    public const CODENT = 'F_ENT.CODENT';

    /** @var string Referencia */
    public const REFENT = 'F_ENT.REFENT';

    /** @var string Fecha */
    public const FECENT = 'F_ENT.FECENT';

    /** @var string [F=00000]Proveedor */
    public const PROENT = 'F_ENT.PROENT';

    /** @var string [L=#0;Pte.#1;Fact.]Estado */
    public const ESTENT = 'F_ENT.ESTENT';

    /** @var string Almacén */
    public const ALMENT = 'F_ENT.ALMENT';

    /** @var string Albarán de entrada */
    public const ALBENT = 'F_ENT.ALBENT';

    /** @var string Cliente del proveedor */
    public const CLIENT = 'F_ENT.CLIENT';

    /** @var string Nombre */
    public const PNOENT = 'F_ENT.PNOENT';

    /** @var string Domicilio */
    public const PDOENT = 'F_ENT.PDOENT';

    /** @var string Población */
    public const PPOENT = 'F_ENT.PPOENT';

    /** @var string Cód. Postal */
    public const PCPENT = 'F_ENT.PCPENT';

    /** @var string Provincia */
    public const PPRENT = 'F_ENT.PPRENT';

    /** @var string N.I.F. */
    public const PNIENT = 'F_ENT.PNIENT';

    /** @var string [L=#0;Con IVA#1;Sin IVA#2;Intracomunitario#3;Importación]Tipo de IVA */
    public const TIVENT = 'F_ENT.TIVENT';

    /** @var string [L=#No#1;Sí]Recargo de equivalencia */
    public const REQENT = 'F_ENT.REQENT';

    /** @var string Teléfono */
    public const PTEENT = 'F_ENT.PTEENT';

    /** @var string Neto 1 */
    public const NET1ENT = 'F_ENT.NET1ENT';

    /** @var string Neto 2 */
    public const NET2ENT = 'F_ENT.NET2ENT';

    /** @var string Neto 3 */
    public const NET3ENT = 'F_ENT.NET3ENT';

    /** @var string Porcentaje de descuento 1 */
    public const PDTO1ENT = 'F_ENT.PDTO1ENT';

    /** @var string Porcentaje de descuento 2 */
    public const PDTO2ENT = 'F_ENT.PDTO2ENT';

    /** @var string Porcentaje de descuento 3 */
    public const PDTO3ENT = 'F_ENT.PDTO3ENT';

    /** @var string Importe de descuento 1 */
    public const IDTO1ENT = 'F_ENT.IDTO1ENT';

    /** @var string Importe de descuento 2 */
    public const IDTO2ENT = 'F_ENT.IDTO2ENT';

    /** @var string Importe de descuento 3 */
    public const IDTO3ENT = 'F_ENT.IDTO3ENT';

    /** @var string Porcentaje de descuento 1 */
    public const PPPA1ENT = 'F_ENT.PPPA1ENT';

    /** @var string Porcentaje de descuento 2 */
    public const PPPA2ENT = 'F_ENT.PPPA2ENT';

    /** @var string Porcentaje de descuento 3 */
    public const PPPA3ENT = 'F_ENT.PPPA3ENT';

    /** @var string Importe de pronto pago 1 */
    public const IPPA1ENT = 'F_ENT.IPPA1ENT';

    /** @var string Importe de pronto pago 2 */
    public const IPPA2ENT = 'F_ENT.IPPA2ENT';

    /** @var string Importe de pronto pago 3 */
    public const IPPA3ENT = 'F_ENT.IPPA3ENT';

    /** @var string Porcentaje de portes 1 */
    public const PPOR1ENT = 'F_ENT.PPOR1ENT';

    /** @var string Porcentaje de portes 2 */
    public const PPOR2ENT = 'F_ENT.PPOR2ENT';

    /** @var string Porcentaje de portes 3 */
    public const PPOR3ENT = 'F_ENT.PPOR3ENT';

    /** @var string Importe de portes 1 */
    public const IPOR1ENT = 'F_ENT.IPOR1ENT';

    /** @var string Importe de portes 2 */
    public const IPOR2ENT = 'F_ENT.IPOR2ENT';

    /** @var string Importe de portes 3 */
    public const IPOR3ENT = 'F_ENT.IPOR3ENT';

    /** @var string Porcentaje de financiación 1 */
    public const PFIN1ENT = 'F_ENT.PFIN1ENT';

    /** @var string Porcentaje de financiación 2 */
    public const PFIN2ENT = 'F_ENT.PFIN2ENT';

    /** @var string Porcentaje de financiación 3 */
    public const PFIN3ENT = 'F_ENT.PFIN3ENT';

    /** @var string Importe de financiación 1 */
    public const IFIN1ENT = 'F_ENT.IFIN1ENT';

    /** @var string Importe de financiación 2 */
    public const IFIN2ENT = 'F_ENT.IFIN2ENT';

    /** @var string Importe de financiación 3 */
    public const IFIN3ENT = 'F_ENT.IFIN3ENT';

    /** @var string Base imponible 1 */
    public const BAS1ENT = 'F_ENT.BAS1ENT';

    /** @var string Base imponible 2 */
    public const BAS2ENT = 'F_ENT.BAS2ENT';

    /** @var string Base imponible 3 */
    public const BAS3ENT = 'F_ENT.BAS3ENT';

    /** @var string Porcentaje de impuestos 1 */
    public const PIVA1ENT = 'F_ENT.PIVA1ENT';

    /** @var string Porcentaje de impuestos 2 */
    public const PIVA2ENT = 'F_ENT.PIVA2ENT';

    /** @var string Porcentaje de impuestos 3 */
    public const PIVA3ENT = 'F_ENT.PIVA3ENT';

    /** @var string Importe de impuestos 1 */
    public const IIVA1ENT = 'F_ENT.IIVA1ENT';

    /** @var string Importe de impuestos 2 */
    public const IIVA2ENT = 'F_ENT.IIVA2ENT';

    /** @var string Importe de impuestos 3 */
    public const IIVA3ENT = 'F_ENT.IIVA3ENT';

    /** @var string Porcentaje de recargo de equivalencia 1 */
    public const PREC1ENT = 'F_ENT.PREC1ENT';

    /** @var string Porcentaje de recrago de equivalencia 2 */
    public const PREC2ENT = 'F_ENT.PREC2ENT';

    /** @var string Porcentaje de recargo de equivalencia 3 */
    public const PREC3ENT = 'F_ENT.PREC3ENT';

    /** @var string Importe de recargo de equivalencia 1 */
    public const IREC1ENT = 'F_ENT.IREC1ENT';

    /** @var string Importe de recargo de equivalencia 2 */
    public const IREC2ENT = 'F_ENT.IREC2ENT';

    /** @var string Importe de recargo de equivalencia 3 */
    public const IREC3ENT = 'F_ENT.IREC3ENT';

    /** @var string Porcentaje de retención */
    public const PRET1ENT = 'F_ENT.PRET1ENT';

    /** @var string Importe de retención */
    public const IRET1ENT = 'F_ENT.IRET1ENT';

    /** @var string Total */
    public const TOTENT = 'F_ENT.TOTENT';

    /** @var string Forma de pago */
    public const FOPENT = 'F_ENT.FOPENT';

    /** @var string [L=#Pagados#1;Debidos]Portes */
    public const PRTENT = 'F_ENT.PRTENT';

    /** @var string Portes (texto) */
    public const TPOENT = 'F_ENT.TPOENT';

    /** @var string Línea 1 de observaciones */
    public const OB1ENT = 'F_ENT.OB1ENT';

    /** @var string Línea 2 de observaciones */
    public const OB2ENT = 'F_ENT.OB2ENT';

    /** @var string Agencia de transportes */
    public const TRAENT = 'F_ENT.TRAENT';

    /** @var string Fecha de entrega */
    public const FENENT = 'F_ENT.FENENT';

    /** @var string Hora de entrega */
    public const HORENT = 'F_ENT.HORENT';

    /** @var string Gasto proporcional 1 */
    public const GP1ENT = 'F_ENT.GP1ENT';

    /** @var string Gasto proporcional 2 */
    public const GP2ENT = 'F_ENT.GP2ENT';

    /** @var string Gasto proporcional 3 */
    public const GP3ENT = 'F_ENT.GP3ENT';

    /** @var string Gasto proporcional 4 */
    public const GP4ENT = 'F_ENT.GP4ENT';

    /** @var string [E]Comentarios después de las líneas de detalle */
    public const COMENT = 'F_ENT.COMENT';

    /** @var string Código del usuario que creó el documento */
    public const USUENT = 'F_ENT.USUENT';

    /** @var string Código del último usuario que modificó el documento */
    public const USMENT = 'F_ENT.USMENT';

    /** @var string Neto (Exento de impuestos) */
    public const NET4ENT = 'F_ENT.NET4ENT';

    /** @var string Porcentaje de descuento (Exento de impuestos) */
    public const PDTO4ENT = 'F_ENT.PDTO4ENT';

    /** @var string Importe de descuento (Exento de impuestos) */
    public const IDTO4ENT = 'F_ENT.IDTO4ENT';

    /** @var string Porcentaje de pronto pago (Exento de impuestos) */
    public const PPPA4ENT = 'F_ENT.PPPA4ENT';

    /** @var string Importe de pronto pago (Exento de impuestos) */
    public const IPPA4ENT = 'F_ENT.IPPA4ENT';

    /** @var string Porcentaje de portes (Exento de impuestos) */
    public const PPOR4ENT = 'F_ENT.PPOR4ENT';

    /** @var string Importe de portes (Exento de impuestos) */
    public const IPOR4ENT = 'F_ENT.IPOR4ENT';

    /** @var string Porcentaje de financiación (Exento de impuestos) */
    public const PFIN4ENT = 'F_ENT.PFIN4ENT';

    /** @var string Importe de financiación (Exento de impuestos) */
    public const IFIN4ENT = 'F_ENT.IFIN4ENT';

    /** @var string Base (Exenta de impuestos) */
    public const BAS4ENT = 'F_ENT.BAS4ENT';

    /** @var string [E]Enviado por e-mail */
    public const EMAENT = 'F_ENT.EMAENT';

    /** @var string [E]Permisos y contraseña del documento */
    public const PASENT = 'F_ENT.PASENT';

    /** @var string E-mail de destino */
    public const PEMENT = 'F_ENT.PEMENT';

    /** @var string País del proveedor */
    public const PPAENT = 'F_ENT.PPAENT';

    /** @var string [E]Tipo de iva al que pertenece el neto 1 (0 a 6) */
    public const TIVA1ENT = 'F_ENT.TIVA1ENT';

    /** @var string [E]Tipo de iva al que pertenece el neto 2 (0 a 6) */
    public const TIVA2ENT = 'F_ENT.TIVA2ENT';

    /** @var string [E]Tipo de iva al que pertenece el neto 3 (0 a 6) */
    public const TIVA3ENT = 'F_ENT.TIVA3ENT';
}
