<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Persistence;

final class F_PRE
{
    public const TABLE_NAME = 'F_PRE';

    /** @var string Nº de serie */
    public const TIPPRE = 'TIPPRE';

    /** @var string [F=000000]Código */
    public const CODPRE = 'CODPRE';

    /** @var string Referencia */
    public const REFPRE = 'REFPRE';

    /** @var string Fecha */
    public const FECPRE = 'FECPRE';

    /** @var string [F=00000]Agente */
    public const AGEPRE = 'AGEPRE';

    /** @var string Proveedor del cliente */
    public const PROPRE = 'PROPRE';

    /** @var string [F=00000]Cliente */
    public const CLIPRE = 'CLIPRE';

    /** @var string Nombre */
    public const CNOPRE = 'CNOPRE';

    /** @var string Domicilio */
    public const CDOPRE = 'CDOPRE';

    /** @var string Población */
    public const CPOPRE = 'CPOPRE';

    /** @var string Cód. Postal */
    public const CCPPRE = 'CCPPRE';

    /** @var string Provincia */
    public const CPRPRE = 'CPRPRE';

    /** @var string N.I.F. */
    public const CNIPRE = 'CNIPRE';

    /** @var string [L=#0;Con IVA#1;Sin IVA#2;Intracomunitario#3;Importación]Tipo de IVA */
    public const TIVPRE = 'TIVPRE';

    /** @var string [L=#No#1;Sí]Recargo de equivalencia */
    public const REQPRE = 'REQPRE';

    /** @var string Teléfono */
    public const TELPRE = 'TELPRE';

    /** @var string Almacén */
    public const ALMPRE = 'ALMPRE';

    /** @var string Neto 1 */
    public const NET1PRE = 'NET1PRE';

    /** @var string Neto 2 */
    public const NET2PRE = 'NET2PRE';

    /** @var string Neto 3 */
    public const NET3PRE = 'NET3PRE';

    /** @var string Porcentaje de descuento 1 */
    public const PDTO1PRE = 'PDTO1PRE';

    /** @var string Porcentaje de descuento 2 */
    public const PDTO2PRE = 'PDTO2PRE';

    /** @var string Porcentaje de descuento 3 */
    public const PDTO3PRE = 'PDTO3PRE';

    /** @var string Importe de descuento 1 */
    public const IDTO1PRE = 'IDTO1PRE';

    /** @var string Importe de descuento 2 */
    public const IDTO2PRE = 'IDTO2PRE';

    /** @var string Importe de descuento 3 */
    public const IDTO3PRE = 'IDTO3PRE';

    /** @var string Porcentaje de pronto pago 1 */
    public const PPPA1PRE = 'PPPA1PRE';

    /** @var string Porcentaje de pronto pago 2 */
    public const PPPA2PRE = 'PPPA2PRE';

    /** @var string Porcentaje de pronto pago 3 */
    public const PPPA3PRE = 'PPPA3PRE';

    /** @var string Importe de pronto pago 1 */
    public const IPPA1PRE = 'IPPA1PRE';

    /** @var string Importe de pronto pago 2 */
    public const IPPA2PRE = 'IPPA2PRE';

    /** @var string Importe de pronto pago 3 */
    public const IPPA3PRE = 'IPPA3PRE';

    /** @var string Porcentaje de portes 1 */
    public const PPOR1PRE = 'PPOR1PRE';

    /** @var string Porcentaje de portes 2 */
    public const PPOR2PRE = 'PPOR2PRE';

    /** @var string Porcentaje de portes 3 */
    public const PPOR3PRE = 'PPOR3PRE';

    /** @var string Importe de portes 1 */
    public const IPOR1PRE = 'IPOR1PRE';

    /** @var string Importe de portes 2 */
    public const IPOR2PRE = 'IPOR2PRE';

    /** @var string Importe de portes 3 */
    public const IPOR3PRE = 'IPOR3PRE';

    /** @var string Porcentaje de financiación 1 */
    public const PFIN1PRE = 'PFIN1PRE';

    /** @var string Porcentaje de financiación 2 */
    public const PFIN2PRE = 'PFIN2PRE';

    /** @var string Porcentaje de financiación 3 */
    public const PFIN3PRE = 'PFIN3PRE';

    /** @var string Importe de financiación 1 */
    public const IFIN1PRE = 'IFIN1PRE';

    /** @var string Importe de financiación 2 */
    public const IFIN2PRE = 'IFIN2PRE';

    /** @var string Importe de financiación 3 */
    public const IFIN3PRE = 'IFIN3PRE';

    /** @var string Base imponible 1 */
    public const BAS1PRE = 'BAS1PRE';

    /** @var string Base imponible 2 */
    public const BAS2PRE = 'BAS2PRE';

    /** @var string Base imponible 3 */
    public const BAS3PRE = 'BAS3PRE';

    /** @var string Porcentaje de impuestos 1 */
    public const PIVA1PRE = 'PIVA1PRE';

    /** @var string Porcentaje de impuestos 2 */
    public const PIVA2PRE = 'PIVA2PRE';

    /** @var string Porcentaje de impuestos 3 */
    public const PIVA3PRE = 'PIVA3PRE';

    /** @var string Importe de impuestos 1 */
    public const IIVA1PRE = 'IIVA1PRE';

    /** @var string Importe de impuestos 2 */
    public const IIVA2PRE = 'IIVA2PRE';

    /** @var string Importe de impuestos 3 */
    public const IIVA3PRE = 'IIVA3PRE';

    /** @var string Porcentaje de recargo de equivalencia 1 */
    public const PREC1PRE = 'PREC1PRE';

    /** @var string Porcentaje de recargo de equivalencia 2 */
    public const PREC2PRE = 'PREC2PRE';

    /** @var string Porcentaje de recargo de equivalencia 3 */
    public const PREC3PRE = 'PREC3PRE';

    /** @var string Importe de recargo de equivalencia 1 */
    public const IREC1PRE = 'IREC1PRE';

    /** @var string Importe de recargo de equivalencia 2 */
    public const IREC2PRE = 'IREC2PRE';

    /** @var string Importe de recargo de equivalencia 3 */
    public const IREC3PRE = 'IREC3PRE';

    /** @var string Porcentaje de retención */
    public const PRET1PRE = 'PRET1PRE';

    /** @var string Importe de retención */
    public const IRET1PRE = 'IRET1PRE';

    /** @var string Total */
    public const TOTPRE = 'TOTPRE';

    /** @var string Forma de pago */
    public const FOPPRE = 'FOPPRE';

    /** @var string Plazo de entrega */
    public const PENPRE = 'PENPRE';

    /** @var string Tiempo de validez */
    public const TVAPRE = 'TVAPRE';

    /** @var string [L=#Pagados#1;Debidos]Portes */
    public const PRTPRE = 'PRTPRE';

    /** @var string Portes (texto) */
    public const TPOPRE = 'TPOPRE';

    /** @var string Línea 1 de observaciones */
    public const OB1PRE = 'OB1PRE';

    /** @var string Línea 2 de observaciones */
    public const OB2PRE = 'OB2PRE';

    /** @var string Código de la dirección de entrega */
    public const OBRPRE = 'OBRPRE';

    /** @var string [L=#0;Pte.#1;Aceptado#2;Rechazado#3;Enviado]Estado */
    public const ESTPRE = 'ESTPRE';

    /** @var string [E][L=#0;No#1;Sí]Imprimir presupuesto */
    public const IPRPRE = 'IPRPRE';

    /** @var string [E][L=#0;No#1;Sí]Imprimir hoja de condiciones */
    public const I1HPRE = 'I1HPRE';

    /** @var string [E]Imprimir factura proforma */
    public const IFPPRE = 'IFPPRE';

    /** @var string [E][L=#0;No#1;Sí]Imprimir hoja de presentación */
    public const I2HPRE = 'I2HPRE';

    /** @var string [E]Código de la hoja de condiciones */
    public const I1NPRE = 'I1NPRE';

    /** @var string [E]Código de la hoja de presentación */
    public const I2NPRE = 'I2NPRE';

    /** @var string [E]Anotaciones privadas del documento */
    public const PRIPRE = 'PRIPRE';

    /** @var string [E]Documentos externos asociados al documento */
    public const ASOPRE = 'ASOPRE';

    /** @var string [E]Comentarios después de las líneas de detalle */
    public const COMPRE = 'COMPRE';

    /** @var string Código del usuario que creó el documento */
    public const USUPRE = 'USUPRE';

    /** @var string Código del último usuario que modificó el documento */
    public const USMPRE = 'USMPRE';

    /** @var string Fax */
    public const FAXPRE = 'FAXPRE';

    /** @var string [E]Imagen de la factura */
    public const IMGPRE = 'IMGPRE';

    /** @var string Neto (Exento de impuestos) */
    public const NET4PRE = 'NET4PRE';

    /** @var string Porcentaje de descuento (Exento de impuestos) */
    public const PDTO4PRE = 'PDTO4PRE';

    /** @var string Importe de descuento (Exento de impuestos) */
    public const IDTO4PRE = 'IDTO4PRE';

    /** @var string Porcentaje de pronto pago (Exento de impuestos) */
    public const PPPA4PRE = 'PPPA4PRE';

    /** @var string Importe de pronto pago (Exento de impuestos) */
    public const IPPA4PRE = 'IPPA4PRE';

    /** @var string Porcentaje de portes (Exento de impuestos) */
    public const PPOR4PRE = 'PPOR4PRE';

    /** @var string Importe de portes (Exento de impuestos) */
    public const IPOR4PRE = 'IPOR4PRE';

    /** @var string Porcentaje de financiación (Exento de impuestos) */
    public const PFIN4PRE = 'PFIN4PRE';

    /** @var string Importe de financiación (Exento de impuestos) */
    public const IFIN4PRE = 'IFIN4PRE';

    /** @var string Base (Exenta de impuestos) */
    public const BAS4PRE = 'BAS4PRE';

    /** @var string [E]Enviado por e-mail */
    public const EMAPRE = 'EMAPRE';

    /** @var string [E]Permisos y contraseña del documento */
    public const PASPRE = 'PASPRE';

    /** @var string [F=hh:mm]Hora */
    public const HORPRE = 'HORPRE';

    /** @var string Carpeta asociada */
    public const CARPRE = 'CARPRE';

    /** @var string E-mail de destino */
    public const CEMPRE = 'CEMPRE';

    /** @var string País del cliente */
    public const CPAPRE = 'CPAPRE';

    /** @var string [E]Tipo de iva al que pertenece el neto 1 (0 a 6) */
    public const TIVA1PRE = 'TIVA1PRE';

    /** @var string [E]Tipo de iva al que pertenece el neto 2 (0 a 6) */
    public const TIVA2PRE = 'TIVA2PRE';

    /** @var string [E]Tipo de iva al que pertenece el neto 3 (0 a 6) */
    public const TIVA3PRE = 'TIVA3PRE';

    public const TPVIDPRE = 'TPVIDPRE';

    public const TERPRE = 'TERPRE';
}
