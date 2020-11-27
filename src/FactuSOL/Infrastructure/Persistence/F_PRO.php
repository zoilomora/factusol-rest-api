<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Persistence;

final class F_PRO
{
    public const TABLE_NAME = 'F_PRO';

    /** @var string [F=00000]Código */
    public const CODPRO = 'F_PRO.CODPRO';

    /** @var string Código contabilidad */
    public const CCOPRO = 'F_PRO.CCOPRO';

    /** @var string [L=#0;Proveedor#1;Acreedor]Tipo */
    public const TIPPRO = 'F_PRO.TIPPRO';

    /** @var string N.I.F. */
    public const NIFPRO = 'F_PRO.NIFPRO';

    /** @var string Nombre fiscal */
    public const NOFPRO = 'F_PRO.NOFPRO';

    /** @var string Nombre comercial */
    public const NOCPRO = 'F_PRO.NOCPRO';

    /** @var string Domicilio */
    public const DOMPRO = 'F_PRO.DOMPRO';

    /** @var string Población */
    public const POBPRO = 'F_PRO.POBPRO';

    /** @var string Cód. Postal */
    public const CPOPRO = 'F_PRO.CPOPRO';

    /** @var string Provincia */
    public const PROPRO = 'F_PRO.PROPRO';

    /** @var string Teléfono */
    public const TELPRO = 'F_PRO.TELPRO';

    /** @var string Fax */
    public const FAXPRO = 'F_PRO.FAXPRO';

    /** @var string Persona de contacto */
    public const PCOPRO = 'F_PRO.PCOPRO';

    /** @var string Banco */
    public const BANPRO = 'F_PRO.BANPRO';

    /** @var string Entidad */
    public const ENTPRO = 'F_PRO.ENTPRO';

    /** @var string Oficina */
    public const OFIPRO = 'F_PRO.OFIPRO';

    /** @var string Dígitos de control */
    public const DCOPRO = 'F_PRO.DCOPRO';

    /** @var string Nº de cuenta */
    public const CUEPRO = 'F_PRO.CUEPRO';

    /** @var string Forma de pago */
    public const FPAPRO = 'F_PRO.FPAPRO';

    /** @var string Aprovisionamiento (Semanas) */
    public const SAPPRO = 'F_PRO.SAPPRO';

    /** @var string Aprovisionamiento (Días) */
    public const DAPPRO = 'F_PRO.DAPPRO';

    /** @var string [E]Tarifa */
    public const TARPRO = 'F_PRO.TARPRO';

    /** @var string Descuento 1 */
    public const DT1PRO = 'F_PRO.DT1PRO';

    /** @var string Descuento 2 */
    public const DT2PRO = 'F_PRO.DT2PRO';

    /** @var string Descuento 3 */
    public const DT3PRO = 'F_PRO.DT3PRO';

    /** @var string Código de cliente */
    public const CCLPRO = 'F_PRO.CCLPRO';

    /** @var string [L=#Pagados#1;Debidos]Portes */
    public const TPOPRO = 'F_PRO.TPOPRO';

    /** @var string Portes (texto) */
    public const PORPRO = 'F_PRO.PORPRO';

    /** @var string [L=#0;Con IVA#1;Sin IVA#2;Intracomunitario#3;Importación]Tipo de IVA */
    public const IVAPRO = 'F_PRO.IVAPRO';

    /** @var string Rappels */
    public const RESPRO = 'F_PRO.RESPRO';

    /** @var string Rappel fijo */
    public const RFIPRO = 'F_PRO.RFIPRO';

    /** @var string Pago de rappels */
    public const PRAPRO = 'F_PRO.PRAPRO';

    /** @var string Fecha de alta */
    public const FALPRO = 'F_PRO.FALPRO';

    /** @var string Web */
    public const WEBPRO = 'F_PRO.WEBPRO';

    /** @var string E-mail */
    public const EMAPRO = 'F_PRO.EMAPRO';

    /** @var string Observaciones */
    public const OBSPRO = 'F_PRO.OBSPRO';

    /** @var string Horario */
    public const HORPRO = 'F_PRO.HORPRO';

    /** @var string Vacaciones (desde) */
    public const VDEPRO = 'F_PRO.VDEPRO';

    /** @var string Vacaciones (hasta) */
    public const VHAPRO = 'F_PRO.VHAPRO';

    /** @var string [E]No vender articulos a este proveedro */
    public const NVAPRO = 'F_PRO.NVAPRO';

    /** @var string [E]No realizar pagos a este proveedor */
    public const NRPPRO = 'F_PRO.NRPPRO';

    /** @var string [E]No imprimir en los listados */
    public const NIPPRO = 'F_PRO.NIPPRO';

    /** @var string País */
    public const PAIPRO = 'F_PRO.PAIPRO';

    /** @var string IBAN del banco */
    public const SWFPRO = 'F_PRO.SWFPRO';

    /** @var string Telex */
    public const TLXPRO = 'F_PRO.TLXPRO';

    /** @var string Domicilio del banco */
    public const DBAPRO = 'F_PRO.DBAPRO';

    /** @var string Población del banco */
    public const PBAPRO = 'F_PRO.PBAPRO';

    /** @var string [L=#No#1;Sí]Recargo de equivalencia */
    public const REQPRO = 'F_PRO.REQPRO';

    /** @var string Cuenta contable de compras */
    public const CCEPRO = 'F_PRO.CCEPRO';

    /** @var string Dia de pago 1 del proveedor */
    public const DP1PRO = 'F_PRO.DP1PRO';

    /** @var string Dia de pago 2 del proveedor */
    public const DP2PRO = 'F_PRO.DP2PRO';

    /** @var string Dia de pago 3 del proveedor */
    public const DP3PRO = 'F_PRO.DP3PRO';

    /** @var string SWIFT del banco */
    public const SWIPRO = 'F_PRO.SWIPRO';

    /** @var string Mensaje emergente */
    public const MEMPRO = 'F_PRO.MEMPRO';

    /** @var string Porcentaje de retención */
    public const RETPRO = 'F_PRO.RETPRO';

    /** @var string Nombre de la persona de contacto 1 */
    public const NO1PRO = 'F_PRO.NO1PRO';

    /** @var string Teléfono de la persona de contacto 1 */
    public const TF1PRO = 'F_PRO.TF1PRO';

    /** @var string E-mail de la persona de contacto 1 */
    public const EM1PRO = 'F_PRO.EM1PRO';

    /** @var string Nombre de la persona de contacto 2 */
    public const NO2PRO = 'F_PRO.NO2PRO';

    /** @var string Teléfono de la persona de contacto 2 */
    public const TF2PRO = 'F_PRO.TF2PRO';

    /** @var string E-mail de la persona de contacto 2 */
    public const EM2PRO = 'F_PRO.EM2PRO';

    /** @var string Nombre de la persona de contacto 3 */
    public const NO3PRO = 'F_PRO.NO3PRO';

    /** @var string Teléfono de la persona de contacto 3 */
    public const TF3PRO = 'F_PRO.TF3PRO';

    /** @var string E-mail de la persona de contacto 3 */
    public const EM3PRO = 'F_PRO.EM3PRO';

    /** @var string Nombre de la persona de contacto 4 */
    public const NO4PRO = 'F_PRO.NO4PRO';

    /** @var string Teléfono de la persona de contacto 4 */
    public const TF4PRO = 'F_PRO.TF4PRO';

    /** @var string E-mail de la persona de contacto 4 */
    public const EM4PRO = 'F_PRO.EM4PRO';

    /** @var string Nombre de la presona de contacto 5 */
    public const NO5PRO = 'F_PRO.NO5PRO';

    /** @var string Teléfono de la persona de contacto 5 */
    public const TF5PRO = 'F_PRO.TF5PRO';

    /** @var string E-mail de la persona de contacto 5 */
    public const EM5PRO = 'F_PRO.EM5PRO';

    /** @var string Nº de serie predeterminado */
    public const DOCPRO = 'F_PRO.DOCPRO';

    public const IFIPRO = 'F_PRO.IFIPRO';

    /** @var string [L=#0;IVA#1;IGIC]Tipo de impuesto */
    public const IMPPRO = 'F_PRO.IMPPRO';

    /** @var string Homologado */
    public const HOMPRO = 'F_PRO.HOMPRO';

    /** @var string Contraseña web */
    public const PWEPRO = 'F_PRO.PWEPRO';

    /** @var string Usuario web */
    public const CUWPRO = 'F_PRO.CUWPRO';

    /** @var string Carpeta asociada al proveedor */
    public const CASPRO = 'F_PRO.CASPRO';

    /** @var string Divisa del proveedor */
    public const CTMPRO = 'F_PRO.CTMPRO';

    /** @var string % Pronto pago */
    public const PPAPRO = 'F_PRO.PPAPRO';

    public const FUMPRO = 'F_PRO.FUMPRO';

    public const TIVPRO = 'F_PRO.TIVPRO';

    public const TWIPRO = 'F_PRO.TWIPRO';

    public const FCBPRO = 'F_PRO.FCBPRO';

    public const MOVPRO = 'F_PRO.MOVPRO';

    public const RCCPRO = 'F_PRO.RCCPRO';

    /** @var string Representante */
    public const REPPRO = 'F_PRO.REPPRO';

    public const COPPRO = 'F_PRO.COPPRO';

    public const APDPRO = 'F_PRO.APDPRO';

    public const PECPRO = 'F_PRO.PECPRO';

    public const TREPRO = 'F_PRO.TREPRO';

    public const CVIPRO = 'F_PRO.CVIPRO';

    public const FAVPRO = 'F_PRO.FAVPRO';

    public const SKYPRO = 'F_PRO.SKYPRO';

    public const ITGPRO = 'F_PRO.ITGPRO';

    public const MDPPRO = 'F_PRO.MDPPRO';
}
