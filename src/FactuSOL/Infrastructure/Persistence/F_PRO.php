<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Persistence;

final class F_PRO
{
    public const TABLE_NAME = 'F_PRO';

    /** @var string [F=00000]Código */
    public const CODPRO = 'CODPRO';

    /** @var string Código contabilidad */
    public const CCOPRO = 'CCOPRO';

    /** @var string [L=#0;Proveedor#1;Acreedor]Tipo */
    public const TIPPRO = 'TIPPRO';

    /** @var string N.I.F. */
    public const NIFPRO = 'NIFPRO';

    /** @var string Nombre fiscal */
    public const NOFPRO = 'NOFPRO';

    /** @var string Nombre comercial */
    public const NOCPRO = 'NOCPRO';

    /** @var string Domicilio */
    public const DOMPRO = 'DOMPRO';

    /** @var string Población */
    public const POBPRO = 'POBPRO';

    /** @var string Cód. Postal */
    public const CPOPRO = 'CPOPRO';

    /** @var string Provincia */
    public const PROPRO = 'PROPRO';

    /** @var string Teléfono */
    public const TELPRO = 'TELPRO';

    /** @var string Fax */
    public const FAXPRO = 'FAXPRO';

    /** @var string Persona de contacto */
    public const PCOPRO = 'PCOPRO';

    /** @var string Banco */
    public const BANPRO = 'BANPRO';

    /** @var string Entidad */
    public const ENTPRO = 'ENTPRO';

    /** @var string Oficina */
    public const OFIPRO = 'OFIPRO';

    /** @var string Dígitos de control */
    public const DCOPRO = 'DCOPRO';

    /** @var string Nº de cuenta */
    public const CUEPRO = 'CUEPRO';

    /** @var string Forma de pago */
    public const FPAPRO = 'FPAPRO';

    /** @var string Aprovisionamiento (Semanas) */
    public const SAPPRO = 'SAPPRO';

    /** @var string Aprovisionamiento (Días) */
    public const DAPPRO = 'DAPPRO';

    /** @var string [E]Tarifa */
    public const TARPRO = 'TARPRO';

    /** @var string Descuento 1 */
    public const DT1PRO = 'DT1PRO';

    /** @var string Descuento 2 */
    public const DT2PRO = 'DT2PRO';

    /** @var string Descuento 3 */
    public const DT3PRO = 'DT3PRO';

    /** @var string Código de cliente */
    public const CCLPRO = 'CCLPRO';

    /** @var string [L=#Pagados#1;Debidos]Portes */
    public const TPOPRO = 'TPOPRO';

    /** @var string Portes (texto) */
    public const PORPRO = 'PORPRO';

    /** @var string [L=#0;Con IVA#1;Sin IVA#2;Intracomunitario#3;Importación]Tipo de IVA */
    public const IVAPRO = 'IVAPRO';

    /** @var string Rappels */
    public const RESPRO = 'RESPRO';

    /** @var string Rappel fijo */
    public const RFIPRO = 'RFIPRO';

    /** @var string Pago de rappels */
    public const PRAPRO = 'PRAPRO';

    /** @var string Fecha de alta */
    public const FALPRO = 'FALPRO';

    /** @var string Web */
    public const WEBPRO = 'WEBPRO';

    /** @var string E-mail */
    public const EMAPRO = 'EMAPRO';

    /** @var string Observaciones */
    public const OBSPRO = 'OBSPRO';

    /** @var string Horario */
    public const HORPRO = 'HORPRO';

    /** @var string Vacaciones (desde) */
    public const VDEPRO = 'VDEPRO';

    /** @var string Vacaciones (hasta) */
    public const VHAPRO = 'VHAPRO';

    /** @var string [E]No vender articulos a este proveedro */
    public const NVAPRO = 'NVAPRO';

    /** @var string [E]No realizar pagos a este proveedor */
    public const NRPPRO = 'NRPPRO';

    /** @var string [E]No imprimir en los listados */
    public const NIPPRO = 'NIPPRO';

    /** @var string País */
    public const PAIPRO = 'PAIPRO';

    /** @var string IBAN del banco */
    public const SWFPRO = 'SWFPRO';

    /** @var string Telex */
    public const TLXPRO = 'TLXPRO';

    /** @var string Domicilio del banco */
    public const DBAPRO = 'DBAPRO';

    /** @var string Población del banco */
    public const PBAPRO = 'PBAPRO';

    /** @var string [L=#No#1;Sí]Recargo de equivalencia */
    public const REQPRO = 'REQPRO';

    /** @var string Cuenta contable de compras */
    public const CCEPRO = 'CCEPRO';

    /** @var string Dia de pago 1 del proveedor */
    public const DP1PRO = 'DP1PRO';

    /** @var string Dia de pago 2 del proveedor */
    public const DP2PRO = 'DP2PRO';

    /** @var string Dia de pago 3 del proveedor */
    public const DP3PRO = 'DP3PRO';

    /** @var string SWIFT del banco */
    public const SWIPRO = 'SWIPRO';

    /** @var string Mensaje emergente */
    public const MEMPRO = 'MEMPRO';

    /** @var string Porcentaje de retención */
    public const RETPRO = 'RETPRO';

    /** @var string Nombre de la persona de contacto 1 */
    public const NO1PRO = 'NO1PRO';

    /** @var string Teléfono de la persona de contacto 1 */
    public const TF1PRO = 'TF1PRO';

    /** @var string E-mail de la persona de contacto 1 */
    public const EM1PRO = 'EM1PRO';

    /** @var string Nombre de la persona de contacto 2 */
    public const NO2PRO = 'NO2PRO';

    /** @var string Teléfono de la persona de contacto 2 */
    public const TF2PRO = 'TF2PRO';

    /** @var string E-mail de la persona de contacto 2 */
    public const EM2PRO = 'EM2PRO';

    /** @var string Nombre de la persona de contacto 3 */
    public const NO3PRO = 'NO3PRO';

    /** @var string Teléfono de la persona de contacto 3 */
    public const TF3PRO = 'TF3PRO';

    /** @var string E-mail de la persona de contacto 3 */
    public const EM3PRO = 'EM3PRO';

    /** @var string Nombre de la persona de contacto 4 */
    public const NO4PRO = 'NO4PRO';

    /** @var string Teléfono de la persona de contacto 4 */
    public const TF4PRO = 'TF4PRO';

    /** @var string E-mail de la persona de contacto 4 */
    public const EM4PRO = 'EM4PRO';

    /** @var string Nombre de la presona de contacto 5 */
    public const NO5PRO = 'NO5PRO';

    /** @var string Teléfono de la persona de contacto 5 */
    public const TF5PRO = 'TF5PRO';

    /** @var string E-mail de la persona de contacto 5 */
    public const EM5PRO = 'EM5PRO';

    /** @var string Nº de serie predeterminado */
    public const DOCPRO = 'DOCPRO';

    public const IFIPRO = 'IFIPRO';

    /** @var string [L=#0;IVA#1;IGIC]Tipo de impuesto */
    public const IMPPRO = 'IMPPRO';

    /** @var string Homologado */
    public const HOMPRO = 'HOMPRO';

    /** @var string Contraseña web */
    public const PWEPRO = 'PWEPRO';

    /** @var string Usuario web */
    public const CUWPRO = 'CUWPRO';

    /** @var string Carpeta asociada al proveedor */
    public const CASPRO = 'CASPRO';

    /** @var string Divisa del proveedor */
    public const CTMPRO = 'CTMPRO';

    /** @var string % Pronto pago */
    public const PPAPRO = 'PPAPRO';

    public const FUMPRO = 'FUMPRO';

    public const TIVPRO = 'TIVPRO';

    public const TWIPRO = 'TWIPRO';

    public const FCBPRO = 'FCBPRO';

    public const MOVPRO = 'MOVPRO';

    public const RCCPRO = 'RCCPRO';

    /** @var string Representante */
    public const REPPRO = 'REPPRO';

    public const COPPRO = 'COPPRO';

    public const APDPRO = 'APDPRO';

    public const PECPRO = 'PECPRO';

    public const TREPRO = 'TREPRO';

    public const CVIPRO = 'CVIPRO';

    public const FAVPRO = 'FAVPRO';

    public const SKYPRO = 'SKYPRO';

    public const ITGPRO = 'ITGPRO';

    public const MDPPRO = 'MDPPRO';
}
