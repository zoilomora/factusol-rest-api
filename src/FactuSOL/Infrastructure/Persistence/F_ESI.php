<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Persistence;

final class F_ESI
{
    public const TABLE_NAME = 'F_ESI';

    /** @var string Documento, 0=Factura emitida;1=Factura recibida;2=Cobro;3=Pago;4=Bien inversión */
    public const DOCESI = 'DOCESI';

    /** @var string Serie */
    public const TIPESI = 'TIPESI';

    /** @var string Código */
    public const CODESI = 'CODESI';

    /** @var string Línea (para los cobros/pagos) */
    public const LINESI = 'LINESI';

    /** @var string Posición */
    public const POSESI = 'POSESI';

    /** @var string Descripción operación */
    public const DESESI = 'DESESI';

    /** @var string Fecha de expedición */
    public const FEXESI = 'FEXESI';

    /** @var string Referencia factura recibida */
    public const REFESI = 'REFESI';

    /** @var string Importe total */
    public const TOTESI = 'TOTESI';

    /** @var string Nº de serie documento rectificado */
    public const TDRESI = 'TDRESI';

    /** @var string Código del documento rectificado */
    public const CDRESI = 'CDRESI';

    /** @var string Suma de bases imponibles del documento rectificativo */
    public const BDRESI = 'BDRESI';

    /** @var string Suma de importes de impuestos del documento rectificativo */
    public const IIDRESI = 'IIDRESI';

    /** @var string Cliente o proveedor */
    public const CLIESI = 'CLIESI';

    /** @var string Razón social */
    public const NOMESI = 'NOMESI';

    public const IFIESI = 'IFIESI';

    /** @var string N.I.F. */
    public const NIFESI = 'NIFESI';

    /** @var string País del cliente */
    public const PAIESI = 'PAIESI';

    /** @var string Base imponible 1 */
    public const BAS1ESI = 'BAS1ESI';

    /** @var string Base imponible 2 */
    public const BAS2ESI = 'BAS2ESI';

    /** @var string Base imponible 3 */
    public const BAS3ESI = 'BAS3ESI';

    /** @var string Base imponible 4 */
    public const BAS4ESI = 'BAS4ESI';

    /** @var string Porcentaje de impuestos 1 */
    public const PIVA1ESI = 'PIVA1ESI';

    /** @var string Porcentaje de impuestos 2 */
    public const PIVA2ESI = 'PIVA2ESI';

    /** @var string Porcentaje de impuestos 3 */
    public const PIVA3ESI = 'PIVA3ESI';

    /** @var string Importe de impuestos 1 */
    public const IIVA1ESI = 'IIVA1ESI';

    /** @var string Importe de impuestos 2 */
    public const IIVA2ESI = 'IIVA2ESI';

    /** @var string Importe de impuestos 3 */
    public const IIVA3ESI = 'IIVA3ESI';

    /** @var string Porcentaje de recargo de equivalencia 1 */
    public const PREC1ESI = 'PREC1ESI';

    /** @var string Porcentaje de recargo de equivalencia 2 */
    public const PREC2ESI = 'PREC2ESI';

    /** @var string Porcentaje de recargo de equivalencia 3 */
    public const PREC3ESI = 'PREC3ESI';

    /** @var string Importe de recargo de equivalencia 1 */
    public const IREC1ESI = 'IREC1ESI';

    /** @var string Importe de recargo de equivalencia 2 */
    public const IREC2ESI = 'IREC2ESI';

    /** @var string Importe de recargo de equivalencia 3 */
    public const IREC3ESI = 'IREC3ESI';

    /** @var string Fecha de cobro */
    public const FCOESI = 'FCOESI';

    /** @var string Importe de cobro */
    public const ICOESI = 'ICOESI';

    /** @var string Medio de cobro/pago */
    public const MCOESI = 'MCOESI';

    /** @var string Cuenta o descripción del medio de cobro/pago */
    public const DCOESI = 'DCOESI';

    /** @var string Estado: 0=Pendiente de enviar; 1=Enviada */
    public const ESTESI = 'ESTESI';

    /** @var string Tipo de accion: 0=Alta, 1=Modificación */
    public const TACESI = 'TACESI';

    /** @var string Fecha */
    public const FECESI = 'FECESI';

    /** @var string Hora de envío */
    public const HORESI = 'HORESI';

    /** @var string Estado de registro de la factura: 0= Sin presentar, 1=Correcta, 2=Aceptada con errores, 3=Rechazada */
    public const ESRESI = 'ESRESI';

    /** @var string Código del error */
    public const CERESI = 'CERESI';

    /** @var string Descripción del error */
    public const DERESI = 'DERESI';

    /** @var string Situación del inmueble */
    public const SINESI = 'SINESI';

    /** @var string Tipo de factura */
    public const TFAESI = 'TFAESI';

    /** @var string Clave regimen */
    public const CREESI = 'CREESI';

    /** @var string Fecha registro contable */
    public const FRCESI = 'FRCESI';

    /** @var string Cuota deducible */
    public const CDEESI = 'CDEESI';

    /** @var string Identificacion bien inversión */
    public const IBIESI = 'IBIESI';

    /** @var string Fecha inicio utilización bien de inversión */
    public const FBIESI = 'FBIESI';

    /** @var string Prorrata anual definitiva del bien de inversión */
    public const PBIESI = 'PBIESI';

    public const DGLESI = 'DGLESI';

    public const TOPESI = 'TOPESI';

    public const RE2ESI = 'RE2ESI';

    public const CSVESI = 'CSVESI';

    public const ISPESI = 'ISPESI';

    public const TERESI = 'TERESI';

    public const IRLESI = 'IRLESI';

    public const IAOESI = 'IAOESI';

    public const TFRESI = 'TFRESI';

    public const IRDRESI = 'IRDRESI';

    public const FOPESI = 'FOPESI';

    public const PERESI = 'PERESI';

    public const RDFESI = 'RDFESI';

    public const TENESI = 'TENESI';

    public const FSIESI = 'FSIESI';

    public const SIDESI = 'SIDESI';

    public const CGEESI = 'CGEESI';

    public const CEXESI = 'CEXESI';
}
