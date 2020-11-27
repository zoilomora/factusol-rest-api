<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Persistence;

final class F_PRE
{
    public const TABLE_NAME = 'F_PRE';

    /** @var string Nº de serie */
    public const TIPPRE = 'F_PRE.TIPPRE';

    /** @var string [F=000000]Código */
    public const CODPRE = 'F_PRE.CODPRE';

    /** @var string Referencia */
    public const REFPRE = 'F_PRE.REFPRE';

    /** @var string Fecha */
    public const FECPRE = 'F_PRE.FECPRE';

    /** @var string [F=00000]Agente */
    public const AGEPRE = 'F_PRE.AGEPRE';

    /** @var string Proveedor del cliente */
    public const PROPRE = 'F_PRE.PROPRE';

    /** @var string [F=00000]Cliente */
    public const CLIPRE = 'F_PRE.CLIPRE';

    /** @var string Nombre */
    public const CNOPRE = 'F_PRE.CNOPRE';

    /** @var string Domicilio */
    public const CDOPRE = 'F_PRE.CDOPRE';

    /** @var string Población */
    public const CPOPRE = 'F_PRE.CPOPRE';

    /** @var string Cód. Postal */
    public const CCPPRE = 'F_PRE.CCPPRE';

    /** @var string Provincia */
    public const CPRPRE = 'F_PRE.CPRPRE';

    /** @var string N.I.F. */
    public const CNIPRE = 'F_PRE.CNIPRE';

    /** @var string [L=#0;Con IVA#1;Sin IVA#2;Intracomunitario#3;Importación]Tipo de IVA */
    public const TIVPRE = 'F_PRE.TIVPRE';

    /** @var string [L=#No#1;Sí]Recargo de equivalencia */
    public const REQPRE = 'F_PRE.REQPRE';

    /** @var string Teléfono */
    public const TELPRE = 'F_PRE.TELPRE';

    /** @var string Almacén */
    public const ALMPRE = 'F_PRE.ALMPRE';

    /** @var string Neto 1 */
    public const NET1PRE = 'F_PRE.NET1PRE';

    /** @var string Neto 2 */
    public const NET2PRE = 'F_PRE.NET2PRE';

    /** @var string Neto 3 */
    public const NET3PRE = 'F_PRE.NET3PRE';

    /** @var string Porcentaje de descuento 1 */
    public const PDTO1PRE = 'F_PRE.PDTO1PRE';

    /** @var string Porcentaje de descuento 2 */
    public const PDTO2PRE = 'F_PRE.PDTO2PRE';

    /** @var string Porcentaje de descuento 3 */
    public const PDTO3PRE = 'F_PRE.PDTO3PRE';

    /** @var string Importe de descuento 1 */
    public const IDTO1PRE = 'F_PRE.IDTO1PRE';

    /** @var string Importe de descuento 2 */
    public const IDTO2PRE = 'F_PRE.IDTO2PRE';

    /** @var string Importe de descuento 3 */
    public const IDTO3PRE = 'F_PRE.IDTO3PRE';

    /** @var string Porcentaje de pronto pago 1 */
    public const PPPA1PRE = 'F_PRE.PPPA1PRE';

    /** @var string Porcentaje de pronto pago 2 */
    public const PPPA2PRE = 'F_PRE.PPPA2PRE';

    /** @var string Porcentaje de pronto pago 3 */
    public const PPPA3PRE = 'F_PRE.PPPA3PRE';

    /** @var string Importe de pronto pago 1 */
    public const IPPA1PRE = 'F_PRE.IPPA1PRE';

    /** @var string Importe de pronto pago 2 */
    public const IPPA2PRE = 'F_PRE.IPPA2PRE';

    /** @var string Importe de pronto pago 3 */
    public const IPPA3PRE = 'F_PRE.IPPA3PRE';

    /** @var string Porcentaje de portes 1 */
    public const PPOR1PRE = 'F_PRE.PPOR1PRE';

    /** @var string Porcentaje de portes 2 */
    public const PPOR2PRE = 'F_PRE.PPOR2PRE';

    /** @var string Porcentaje de portes 3 */
    public const PPOR3PRE = 'F_PRE.PPOR3PRE';

    /** @var string Importe de portes 1 */
    public const IPOR1PRE = 'F_PRE.IPOR1PRE';

    /** @var string Importe de portes 2 */
    public const IPOR2PRE = 'F_PRE.IPOR2PRE';

    /** @var string Importe de portes 3 */
    public const IPOR3PRE = 'F_PRE.IPOR3PRE';

    /** @var string Porcentaje de financiación 1 */
    public const PFIN1PRE = 'F_PRE.PFIN1PRE';

    /** @var string Porcentaje de financiación 2 */
    public const PFIN2PRE = 'F_PRE.PFIN2PRE';

    /** @var string Porcentaje de financiación 3 */
    public const PFIN3PRE = 'F_PRE.PFIN3PRE';

    /** @var string Importe de financiación 1 */
    public const IFIN1PRE = 'F_PRE.IFIN1PRE';

    /** @var string Importe de financiación 2 */
    public const IFIN2PRE = 'F_PRE.IFIN2PRE';

    /** @var string Importe de financiación 3 */
    public const IFIN3PRE = 'F_PRE.IFIN3PRE';

    /** @var string Base imponible 1 */
    public const BAS1PRE = 'F_PRE.BAS1PRE';

    /** @var string Base imponible 2 */
    public const BAS2PRE = 'F_PRE.BAS2PRE';

    /** @var string Base imponible 3 */
    public const BAS3PRE = 'F_PRE.BAS3PRE';

    /** @var string Porcentaje de impuestos 1 */
    public const PIVA1PRE = 'F_PRE.PIVA1PRE';

    /** @var string Porcentaje de impuestos 2 */
    public const PIVA2PRE = 'F_PRE.PIVA2PRE';

    /** @var string Porcentaje de impuestos 3 */
    public const PIVA3PRE = 'F_PRE.PIVA3PRE';

    /** @var string Importe de impuestos 1 */
    public const IIVA1PRE = 'F_PRE.IIVA1PRE';

    /** @var string Importe de impuestos 2 */
    public const IIVA2PRE = 'F_PRE.IIVA2PRE';

    /** @var string Importe de impuestos 3 */
    public const IIVA3PRE = 'F_PRE.IIVA3PRE';

    /** @var string Porcentaje de recargo de equivalencia 1 */
    public const PREC1PRE = 'F_PRE.PREC1PRE';

    /** @var string Porcentaje de recargo de equivalencia 2 */
    public const PREC2PRE = 'F_PRE.PREC2PRE';

    /** @var string Porcentaje de recargo de equivalencia 3 */
    public const PREC3PRE = 'F_PRE.PREC3PRE';

    /** @var string Importe de recargo de equivalencia 1 */
    public const IREC1PRE = 'F_PRE.IREC1PRE';

    /** @var string Importe de recargo de equivalencia 2 */
    public const IREC2PRE = 'F_PRE.IREC2PRE';

    /** @var string Importe de recargo de equivalencia 3 */
    public const IREC3PRE = 'F_PRE.IREC3PRE';

    /** @var string Porcentaje de retención */
    public const PRET1PRE = 'F_PRE.PRET1PRE';

    /** @var string Importe de retención */
    public const IRET1PRE = 'F_PRE.IRET1PRE';

    /** @var string Total */
    public const TOTPRE = 'F_PRE.TOTPRE';

    /** @var string Forma de pago */
    public const FOPPRE = 'F_PRE.FOPPRE';

    /** @var string Plazo de entrega */
    public const PENPRE = 'F_PRE.PENPRE';

    /** @var string Tiempo de validez */
    public const TVAPRE = 'F_PRE.TVAPRE';

    /** @var string [L=#Pagados#1;Debidos]Portes */
    public const PRTPRE = 'F_PRE.PRTPRE';

    /** @var string Portes (texto) */
    public const TPOPRE = 'F_PRE.TPOPRE';

    /** @var string Línea 1 de observaciones */
    public const OB1PRE = 'F_PRE.OB1PRE';

    /** @var string Línea 2 de observaciones */
    public const OB2PRE = 'F_PRE.OB2PRE';

    /** @var string Código de la dirección de entrega */
    public const OBRPRE = 'F_PRE.OBRPRE';

    /** @var string [L=#0;Pte.#1;Aceptado#2;Rechazado#3;Enviado]Estado */
    public const ESTPRE = 'F_PRE.ESTPRE';

    /** @var string [E][L=#0;No#1;Sí]Imprimir presupuesto */
    public const IPRPRE = 'F_PRE.IPRPRE';

    /** @var string [E][L=#0;No#1;Sí]Imprimir hoja de condiciones */
    public const I1HPRE = 'F_PRE.I1HPRE';

    /** @var string [E]Imprimir factura proforma */
    public const IFPPRE = 'F_PRE.IFPPRE';

    /** @var string [E][L=#0;No#1;Sí]Imprimir hoja de presentación */
    public const I2HPRE = 'F_PRE.I2HPRE';

    /** @var string [E]Código de la hoja de condiciones */
    public const I1NPRE = 'F_PRE.I1NPRE';

    /** @var string [E]Código de la hoja de presentación */
    public const I2NPRE = 'F_PRE.I2NPRE';

    /** @var string [E]Anotaciones privadas del documento */
    public const PRIPRE = 'F_PRE.PRIPRE';

    /** @var string [E]Documentos externos asociados al documento */
    public const ASOPRE = 'F_PRE.ASOPRE';

    /** @var string [E]Comentarios después de las líneas de detalle */
    public const COMPRE = 'F_PRE.COMPRE';

    /** @var string Código del usuario que creó el documento */
    public const USUPRE = 'F_PRE.USUPRE';

    /** @var string Código del último usuario que modificó el documento */
    public const USMPRE = 'F_PRE.USMPRE';

    /** @var string Fax */
    public const FAXPRE = 'F_PRE.FAXPRE';

    /** @var string [E]Imagen de la factura */
    public const IMGPRE = 'F_PRE.IMGPRE';

    /** @var string Neto (Exento de impuestos) */
    public const NET4PRE = 'F_PRE.NET4PRE';

    /** @var string Porcentaje de descuento (Exento de impuestos) */
    public const PDTO4PRE = 'F_PRE.PDTO4PRE';

    /** @var string Importe de descuento (Exento de impuestos) */
    public const IDTO4PRE = 'F_PRE.IDTO4PRE';

    /** @var string Porcentaje de pronto pago (Exento de impuestos) */
    public const PPPA4PRE = 'F_PRE.PPPA4PRE';

    /** @var string Importe de pronto pago (Exento de impuestos) */
    public const IPPA4PRE = 'F_PRE.IPPA4PRE';

    /** @var string Porcentaje de portes (Exento de impuestos) */
    public const PPOR4PRE = 'F_PRE.PPOR4PRE';

    /** @var string Importe de portes (Exento de impuestos) */
    public const IPOR4PRE = 'F_PRE.IPOR4PRE';

    /** @var string Porcentaje de financiación (Exento de impuestos) */
    public const PFIN4PRE = 'F_PRE.PFIN4PRE';

    /** @var string Importe de financiación (Exento de impuestos) */
    public const IFIN4PRE = 'F_PRE.IFIN4PRE';

    /** @var string Base (Exenta de impuestos) */
    public const BAS4PRE = 'F_PRE.BAS4PRE';

    /** @var string [E]Enviado por e-mail */
    public const EMAPRE = 'F_PRE.EMAPRE';

    /** @var string [E]Permisos y contraseña del documento */
    public const PASPRE = 'F_PRE.PASPRE';

    /** @var string [F=hh:mm]Hora */
    public const HORPRE = 'F_PRE.HORPRE';

    /** @var string Carpeta asociada */
    public const CARPRE = 'F_PRE.CARPRE';

    /** @var string E-mail de destino */
    public const CEMPRE = 'F_PRE.CEMPRE';

    /** @var string País del cliente */
    public const CPAPRE = 'F_PRE.CPAPRE';

    /** @var string [E]Tipo de iva al que pertenece el neto 1 (0 a 6) */
    public const TIVA1PRE = 'F_PRE.TIVA1PRE';

    /** @var string [E]Tipo de iva al que pertenece el neto 2 (0 a 6) */
    public const TIVA2PRE = 'F_PRE.TIVA2PRE';

    /** @var string [E]Tipo de iva al que pertenece el neto 3 (0 a 6) */
    public const TIVA3PRE = 'F_PRE.TIVA3PRE';

    public const TPVIDPRE = 'F_PRE.TPVIDPRE';

    public const TERPRE = 'F_PRE.TERPRE';
}
