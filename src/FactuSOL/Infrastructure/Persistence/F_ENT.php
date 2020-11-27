<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Persistence;

final class F_ENT
{
    public const TABLE_NAME = 'F_ENT';

    /** @var string Nº de serie */
    public const TIPENT = 'TIPENT';

    /** @var string [F=000000]Código */
    public const CODENT = 'CODENT';

    /** @var string Referencia */
    public const REFENT = 'REFENT';

    /** @var string Fecha */
    public const FECENT = 'FECENT';

    /** @var string [F=00000]Proveedor */
    public const PROENT = 'PROENT';

    /** @var string [L=#0;Pte.#1;Fact.]Estado */
    public const ESTENT = 'ESTENT';

    /** @var string Almacén */
    public const ALMENT = 'ALMENT';

    /** @var string Albarán de entrada */
    public const ALBENT = 'ALBENT';

    /** @var string Cliente del proveedor */
    public const CLIENT = 'CLIENT';

    /** @var string Nombre */
    public const PNOENT = 'PNOENT';

    /** @var string Domicilio */
    public const PDOENT = 'PDOENT';

    /** @var string Población */
    public const PPOENT = 'PPOENT';

    /** @var string Cód. Postal */
    public const PCPENT = 'PCPENT';

    /** @var string Provincia */
    public const PPRENT = 'PPRENT';

    /** @var string N.I.F. */
    public const PNIENT = 'PNIENT';

    /** @var string [L=#0;Con IVA#1;Sin IVA#2;Intracomunitario#3;Importación]Tipo de IVA */
    public const TIVENT = 'TIVENT';

    /** @var string [L=#No#1;Sí]Recargo de equivalencia */
    public const REQENT = 'REQENT';

    /** @var string Teléfono */
    public const PTEENT = 'PTEENT';

    /** @var string Neto 1 */
    public const NET1ENT = 'NET1ENT';

    /** @var string Neto 2 */
    public const NET2ENT = 'NET2ENT';

    /** @var string Neto 3 */
    public const NET3ENT = 'NET3ENT';

    /** @var string Porcentaje de descuento 1 */
    public const PDTO1ENT = 'PDTO1ENT';

    /** @var string Porcentaje de descuento 2 */
    public const PDTO2ENT = 'PDTO2ENT';

    /** @var string Porcentaje de descuento 3 */
    public const PDTO3ENT = 'PDTO3ENT';

    /** @var string Importe de descuento 1 */
    public const IDTO1ENT = 'IDTO1ENT';

    /** @var string Importe de descuento 2 */
    public const IDTO2ENT = 'IDTO2ENT';

    /** @var string Importe de descuento 3 */
    public const IDTO3ENT = 'IDTO3ENT';

    /** @var string Porcentaje de descuento 1 */
    public const PPPA1ENT = 'PPPA1ENT';

    /** @var string Porcentaje de descuento 2 */
    public const PPPA2ENT = 'PPPA2ENT';

    /** @var string Porcentaje de descuento 3 */
    public const PPPA3ENT = 'PPPA3ENT';

    /** @var string Importe de pronto pago 1 */
    public const IPPA1ENT = 'IPPA1ENT';

    /** @var string Importe de pronto pago 2 */
    public const IPPA2ENT = 'IPPA2ENT';

    /** @var string Importe de pronto pago 3 */
    public const IPPA3ENT = 'IPPA3ENT';

    /** @var string Porcentaje de portes 1 */
    public const PPOR1ENT = 'PPOR1ENT';

    /** @var string Porcentaje de portes 2 */
    public const PPOR2ENT = 'PPOR2ENT';

    /** @var string Porcentaje de portes 3 */
    public const PPOR3ENT = 'PPOR3ENT';

    /** @var string Importe de portes 1 */
    public const IPOR1ENT = 'IPOR1ENT';

    /** @var string Importe de portes 2 */
    public const IPOR2ENT = 'IPOR2ENT';

    /** @var string Importe de portes 3 */
    public const IPOR3ENT = 'IPOR3ENT';

    /** @var string Porcentaje de financiación 1 */
    public const PFIN1ENT = 'PFIN1ENT';

    /** @var string Porcentaje de financiación 2 */
    public const PFIN2ENT = 'PFIN2ENT';

    /** @var string Porcentaje de financiación 3 */
    public const PFIN3ENT = 'PFIN3ENT';

    /** @var string Importe de financiación 1 */
    public const IFIN1ENT = 'IFIN1ENT';

    /** @var string Importe de financiación 2 */
    public const IFIN2ENT = 'IFIN2ENT';

    /** @var string Importe de financiación 3 */
    public const IFIN3ENT = 'IFIN3ENT';

    /** @var string Base imponible 1 */
    public const BAS1ENT = 'BAS1ENT';

    /** @var string Base imponible 2 */
    public const BAS2ENT = 'BAS2ENT';

    /** @var string Base imponible 3 */
    public const BAS3ENT = 'BAS3ENT';

    /** @var string Porcentaje de impuestos 1 */
    public const PIVA1ENT = 'PIVA1ENT';

    /** @var string Porcentaje de impuestos 2 */
    public const PIVA2ENT = 'PIVA2ENT';

    /** @var string Porcentaje de impuestos 3 */
    public const PIVA3ENT = 'PIVA3ENT';

    /** @var string Importe de impuestos 1 */
    public const IIVA1ENT = 'IIVA1ENT';

    /** @var string Importe de impuestos 2 */
    public const IIVA2ENT = 'IIVA2ENT';

    /** @var string Importe de impuestos 3 */
    public const IIVA3ENT = 'IIVA3ENT';

    /** @var string Porcentaje de recargo de equivalencia 1 */
    public const PREC1ENT = 'PREC1ENT';

    /** @var string Porcentaje de recrago de equivalencia 2 */
    public const PREC2ENT = 'PREC2ENT';

    /** @var string Porcentaje de recargo de equivalencia 3 */
    public const PREC3ENT = 'PREC3ENT';

    /** @var string Importe de recargo de equivalencia 1 */
    public const IREC1ENT = 'IREC1ENT';

    /** @var string Importe de recargo de equivalencia 2 */
    public const IREC2ENT = 'IREC2ENT';

    /** @var string Importe de recargo de equivalencia 3 */
    public const IREC3ENT = 'IREC3ENT';

    /** @var string Porcentaje de retención */
    public const PRET1ENT = 'PRET1ENT';

    /** @var string Importe de retención */
    public const IRET1ENT = 'IRET1ENT';

    /** @var string Total */
    public const TOTENT = 'TOTENT';

    /** @var string Forma de pago */
    public const FOPENT = 'FOPENT';

    /** @var string [L=#Pagados#1;Debidos]Portes */
    public const PRTENT = 'PRTENT';

    /** @var string Portes (texto) */
    public const TPOENT = 'TPOENT';

    /** @var string Línea 1 de observaciones */
    public const OB1ENT = 'OB1ENT';

    /** @var string Línea 2 de observaciones */
    public const OB2ENT = 'OB2ENT';

    /** @var string Agencia de transportes */
    public const TRAENT = 'TRAENT';

    /** @var string Fecha de entrega */
    public const FENENT = 'FENENT';

    /** @var string Hora de entrega */
    public const HORENT = 'HORENT';

    /** @var string Gasto proporcional 1 */
    public const GP1ENT = 'GP1ENT';

    /** @var string Gasto proporcional 2 */
    public const GP2ENT = 'GP2ENT';

    /** @var string Gasto proporcional 3 */
    public const GP3ENT = 'GP3ENT';

    /** @var string Gasto proporcional 4 */
    public const GP4ENT = 'GP4ENT';

    /** @var string [E]Comentarios después de las líneas de detalle */
    public const COMENT = 'COMENT';

    /** @var string Código del usuario que creó el documento */
    public const USUENT = 'USUENT';

    /** @var string Código del último usuario que modificó el documento */
    public const USMENT = 'USMENT';

    /** @var string Neto (Exento de impuestos) */
    public const NET4ENT = 'NET4ENT';

    /** @var string Porcentaje de descuento (Exento de impuestos) */
    public const PDTO4ENT = 'PDTO4ENT';

    /** @var string Importe de descuento (Exento de impuestos) */
    public const IDTO4ENT = 'IDTO4ENT';

    /** @var string Porcentaje de pronto pago (Exento de impuestos) */
    public const PPPA4ENT = 'PPPA4ENT';

    /** @var string Importe de pronto pago (Exento de impuestos) */
    public const IPPA4ENT = 'IPPA4ENT';

    /** @var string Porcentaje de portes (Exento de impuestos) */
    public const PPOR4ENT = 'PPOR4ENT';

    /** @var string Importe de portes (Exento de impuestos) */
    public const IPOR4ENT = 'IPOR4ENT';

    /** @var string Porcentaje de financiación (Exento de impuestos) */
    public const PFIN4ENT = 'PFIN4ENT';

    /** @var string Importe de financiación (Exento de impuestos) */
    public const IFIN4ENT = 'IFIN4ENT';

    /** @var string Base (Exenta de impuestos) */
    public const BAS4ENT = 'BAS4ENT';

    /** @var string [E]Enviado por e-mail */
    public const EMAENT = 'EMAENT';

    /** @var string [E]Permisos y contraseña del documento */
    public const PASENT = 'PASENT';

    /** @var string E-mail de destino */
    public const PEMENT = 'PEMENT';

    /** @var string País del proveedor */
    public const PPAENT = 'PPAENT';

    /** @var string [E]Tipo de iva al que pertenece el neto 1 (0 a 6) */
    public const TIVA1ENT = 'TIVA1ENT';

    /** @var string [E]Tipo de iva al que pertenece el neto 2 (0 a 6) */
    public const TIVA2ENT = 'TIVA2ENT';

    /** @var string [E]Tipo de iva al que pertenece el neto 3 (0 a 6) */
    public const TIVA3ENT = 'TIVA3ENT';
}
