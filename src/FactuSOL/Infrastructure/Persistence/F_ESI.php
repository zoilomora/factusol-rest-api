<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Persistence;

final class F_ESI
{
    public const TABLE_NAME = 'F_ESI';

    /** @var string Documento, 0=Factura emitida;1=Factura recibida;2=Cobro;3=Pago;4=Bien inversión */
    public const DOCESI = 'F_ESI.DOCESI';

    /** @var string Serie */
    public const TIPESI = 'F_ESI.TIPESI';

    /** @var string Código */
    public const CODESI = 'F_ESI.CODESI';

    /** @var string Línea (para los cobros/pagos) */
    public const LINESI = 'F_ESI.LINESI';

    /** @var string Posición */
    public const POSESI = 'F_ESI.POSESI';

    /** @var string Descripción operación */
    public const DESESI = 'F_ESI.DESESI';

    /** @var string Fecha de expedición */
    public const FEXESI = 'F_ESI.FEXESI';

    /** @var string Referencia factura recibida */
    public const REFESI = 'F_ESI.REFESI';

    /** @var string Importe total */
    public const TOTESI = 'F_ESI.TOTESI';

    /** @var string Nº de serie documento rectificado */
    public const TDRESI = 'F_ESI.TDRESI';

    /** @var string Código del documento rectificado */
    public const CDRESI = 'F_ESI.CDRESI';

    /** @var string Suma de bases imponibles del documento rectificativo */
    public const BDRESI = 'F_ESI.BDRESI';

    /** @var string Suma de importes de impuestos del documento rectificativo */
    public const IIDRESI = 'F_ESI.IIDRESI';

    /** @var string Cliente o proveedor */
    public const CLIESI = 'F_ESI.CLIESI';

    /** @var string Razón social */
    public const NOMESI = 'F_ESI.NOMESI';

    public const IFIESI = 'F_ESI.IFIESI';

    /** @var string N.I.F. */
    public const NIFESI = 'F_ESI.NIFESI';

    /** @var string País del cliente */
    public const PAIESI = 'F_ESI.PAIESI';

    /** @var string Base imponible 1 */
    public const BAS1ESI = 'F_ESI.BAS1ESI';

    /** @var string Base imponible 2 */
    public const BAS2ESI = 'F_ESI.BAS2ESI';

    /** @var string Base imponible 3 */
    public const BAS3ESI = 'F_ESI.BAS3ESI';

    /** @var string Base imponible 4 */
    public const BAS4ESI = 'F_ESI.BAS4ESI';

    /** @var string Porcentaje de impuestos 1 */
    public const PIVA1ESI = 'F_ESI.PIVA1ESI';

    /** @var string Porcentaje de impuestos 2 */
    public const PIVA2ESI = 'F_ESI.PIVA2ESI';

    /** @var string Porcentaje de impuestos 3 */
    public const PIVA3ESI = 'F_ESI.PIVA3ESI';

    /** @var string Importe de impuestos 1 */
    public const IIVA1ESI = 'F_ESI.IIVA1ESI';

    /** @var string Importe de impuestos 2 */
    public const IIVA2ESI = 'F_ESI.IIVA2ESI';

    /** @var string Importe de impuestos 3 */
    public const IIVA3ESI = 'F_ESI.IIVA3ESI';

    /** @var string Porcentaje de recargo de equivalencia 1 */
    public const PREC1ESI = 'F_ESI.PREC1ESI';

    /** @var string Porcentaje de recargo de equivalencia 2 */
    public const PREC2ESI = 'F_ESI.PREC2ESI';

    /** @var string Porcentaje de recargo de equivalencia 3 */
    public const PREC3ESI = 'F_ESI.PREC3ESI';

    /** @var string Importe de recargo de equivalencia 1 */
    public const IREC1ESI = 'F_ESI.IREC1ESI';

    /** @var string Importe de recargo de equivalencia 2 */
    public const IREC2ESI = 'F_ESI.IREC2ESI';

    /** @var string Importe de recargo de equivalencia 3 */
    public const IREC3ESI = 'F_ESI.IREC3ESI';

    /** @var string Fecha de cobro */
    public const FCOESI = 'F_ESI.FCOESI';

    /** @var string Importe de cobro */
    public const ICOESI = 'F_ESI.ICOESI';

    /** @var string Medio de cobro/pago */
    public const MCOESI = 'F_ESI.MCOESI';

    /** @var string Cuenta o descripción del medio de cobro/pago */
    public const DCOESI = 'F_ESI.DCOESI';

    /** @var string Estado: 0=Pendiente de enviar; 1=Enviada */
    public const ESTESI = 'F_ESI.ESTESI';

    /** @var string Tipo de accion: 0=Alta, 1=Modificación */
    public const TACESI = 'F_ESI.TACESI';

    /** @var string Fecha */
    public const FECESI = 'F_ESI.FECESI';

    /** @var string Hora de envío */
    public const HORESI = 'F_ESI.HORESI';

    /** @var string Estado de registro de la factura: 0= Sin presentar, 1=Correcta, 2=Aceptada con errores, 3=Rechazada */
    public const ESRESI = 'F_ESI.ESRESI';

    /** @var string Código del error */
    public const CERESI = 'F_ESI.CERESI';

    /** @var string Descripción del error */
    public const DERESI = 'F_ESI.DERESI';

    /** @var string Situación del inmueble */
    public const SINESI = 'F_ESI.SINESI';

    /** @var string Tipo de factura */
    public const TFAESI = 'F_ESI.TFAESI';

    /** @var string Clave regimen */
    public const CREESI = 'F_ESI.CREESI';

    /** @var string Fecha registro contable */
    public const FRCESI = 'F_ESI.FRCESI';

    /** @var string Cuota deducible */
    public const CDEESI = 'F_ESI.CDEESI';

    /** @var string Identificacion bien inversión */
    public const IBIESI = 'F_ESI.IBIESI';

    /** @var string Fecha inicio utilización bien de inversión */
    public const FBIESI = 'F_ESI.FBIESI';

    /** @var string Prorrata anual definitiva del bien de inversión */
    public const PBIESI = 'F_ESI.PBIESI';

    public const DGLESI = 'F_ESI.DGLESI';

    public const TOPESI = 'F_ESI.TOPESI';

    public const RE2ESI = 'F_ESI.RE2ESI';

    public const CSVESI = 'F_ESI.CSVESI';

    public const ISPESI = 'F_ESI.ISPESI';

    public const TERESI = 'F_ESI.TERESI';

    public const IRLESI = 'F_ESI.IRLESI';

    public const IAOESI = 'F_ESI.IAOESI';

    public const TFRESI = 'F_ESI.TFRESI';

    public const IRDRESI = 'F_ESI.IRDRESI';

    public const FOPESI = 'F_ESI.FOPESI';

    public const PERESI = 'F_ESI.PERESI';

    public const RDFESI = 'F_ESI.RDFESI';

    public const TENESI = 'F_ESI.TENESI';

    public const FSIESI = 'F_ESI.FSIESI';

    public const SIDESI = 'F_ESI.SIDESI';

    public const CGEESI = 'F_ESI.CGEESI';

    public const CEXESI = 'F_ESI.CEXESI';
}
