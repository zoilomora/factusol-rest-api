<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Persistence;

final class F_CLI
{
    public const TABLE_NAME = 'F_CLI';

    /** @var string Código */
    public const CODCLI = 'F_CLI.CODCLI';

    /** @var string Código contable */
    public const CCOCLI = 'F_CLI.CCOCLI';

    /** @var string N.I.F. */
    public const NIFCLI = 'F_CLI.NIFCLI';

    /** @var string Nombre fiscal */
    public const NOFCLI = 'F_CLI.NOFCLI';

    /** @var string Nombre comercial */
    public const NOCCLI = 'F_CLI.NOCCLI';

    /** @var string Domicilio */
    public const DOMCLI = 'F_CLI.DOMCLI';

    /** @var string Población */
    public const POBCLI = 'F_CLI.POBCLI';

    /** @var string Cód. Postal */
    public const CPOCLI = 'F_CLI.CPOCLI';

    /** @var string Provincia */
    public const PROCLI = 'F_CLI.PROCLI';

    /** @var string Teléfono */
    public const TELCLI = 'F_CLI.TELCLI';

    /** @var string Fax */
    public const FAXCLI = 'F_CLI.FAXCLI';

    /** @var string Persona de contacto */
    public const PCOCLI = 'F_CLI.PCOCLI';

    /** @var string [F=00000]Agente comercial */
    public const AGECLI = 'F_CLI.AGECLI';

    /** @var string Banco */
    public const BANCLI = 'F_CLI.BANCLI';

    /** @var string Entidad */
    public const ENTCLI = 'F_CLI.ENTCLI';

    /** @var string Oficina */
    public const OFICLI = 'F_CLI.OFICLI';

    /** @var string Dígito de control */
    public const DCOCLI = 'F_CLI.DCOCLI';

    /** @var string Nº de cuenta */
    public const CUECLI = 'F_CLI.CUECLI';

    /** @var string Forma de pago */
    public const FPACLI = 'F_CLI.FPACLI';

    /** @var string Porcentaje de financiación */
    public const FINCLI = 'F_CLI.FINCLI';

    /** @var string Porcentaje de pronto pago */
    public const PPACLI = 'F_CLI.PPACLI';

    /** @var string [E]Tarifa */
    public const TARCLI = 'F_CLI.TARCLI';

    /** @var string Día de pago 1 */
    public const DP1CLI = 'F_CLI.DP1CLI';

    /** @var string Día de pago 2 */
    public const DP2CLI = 'F_CLI.DP2CLI';

    /** @var string Día de pago 3 */
    public const DP3CLI = 'F_CLI.DP3CLI';

    /** @var string Tipo de cliente */
    public const TCLCLI = 'F_CLI.TCLCLI';

    /** @var string Descuento 1 */
    public const DT1CLI = 'F_CLI.DT1CLI';

    /** @var string Descuento 2 */
    public const DT2CLI = 'F_CLI.DT2CLI';

    /** @var string Descuento 3 */
    public const DT3CLI = 'F_CLI.DT3CLI';

    /** @var string [E]Tarifa especial; 0: No, 1:si */
    public const TESCLI = 'F_CLI.TESCLI';

    /** @var string Código de proveedor */
    public const CPRCLI = 'F_CLI.CPRCLI';

    /** @var string [L=#Pagados#1;Debidos]Portes */
    public const TPOCLI = 'F_CLI.TPOCLI';

    /** @var string Portes (texto) */
    public const PORCLI = 'F_CLI.PORCLI';

    /** @var string [L=#0;Con IVA#1;Sin IVA#2;Intracomunitario#3;Importación]Tipo de IVA */
    public const IVACLI = 'F_CLI.IVACLI';

    /** @var string [L=#0;IVA1AUT#1;IVA2AUT#2;IVA3AUT#3;Exento]Porcentaje de IVA */
    public const TIVCLI = 'F_CLI.TIVCLI';

    /** @var string [L=#No#1;Sí]Recargo de equivalencia */
    public const REQCLI = 'F_CLI.REQCLI';

    /** @var string Fecha de alta */
    public const FALCLI = 'F_CLI.FALCLI';

    /** @var string E-mail */
    public const EMACLI = 'F_CLI.EMACLI';

    /** @var string Web */
    public const WEBCLI = 'F_CLI.WEBCLI';

    /** @var string Mensaje emergente */
    public const MEMCLI = 'F_CLI.MEMCLI';

    /** @var string Observaciones */
    public const OBSCLI = 'F_CLI.OBSCLI';

    /** @var string Horario */
    public const HORCLI = 'F_CLI.HORCLI';

    /** @var string Vacaciones (desde) */
    public const VDECLI = 'F_CLI.VDECLI';

    /** @var string Vacaciones (hasta) */
    public const VHACLI = 'F_CLI.VHACLI';

    /** @var string [E]Crear recibo al factura */
    public const CRFCLI = 'F_CLI.CRFCLI';

    /** @var string [E]No vender a este cliente */
    public const NVCCLI = 'F_CLI.NVCCLI';

    /** @var string [E]No facturar a este cliente */
    public const NFCCLI = 'F_CLI.NFCCLI';

    /** @var string [E]No imprimir este cliente */
    public const NICCLI = 'F_CLI.NICCLI';

    /** @var string [E]0: Euros;1:Pesetas */
    public const MONCLI = 'F_CLI.MONCLI';

    /** @var string País */
    public const PAICLI = 'F_CLI.PAICLI';

    /** @var string Nº de serie predeterminado */
    public const DOCCLI = 'F_CLI.DOCCLI';

    /** @var string Dirección del banco */
    public const DBACLI = 'F_CLI.DBACLI';

    /** @var string Población del banco */
    public const PBACLI = 'F_CLI.PBACLI';

    /** @var string IBAN del banco */
    public const SWFCLI = 'F_CLI.SWFCLI';

    /** @var string Concepto 1 de facturación */
    public const CO1CLI = 'F_CLI.CO1CLI';

    /** @var string Concepto 2 de facturación */
    public const CO2CLI = 'F_CLI.CO2CLI';

    /** @var string Concepto 3 de facturación */
    public const CO3CLI = 'F_CLI.CO3CLI';

    /** @var string Concepto 4 de facturación */
    public const CO4CLI = 'F_CLI.CO4CLI';

    /** @var string Concepto 5 de facturación */
    public const CO5CLI = 'F_CLI.CO5CLI';

    /** @var string Importe 1 de facturación */
    public const IM1CLI = 'F_CLI.IM1CLI';

    /** @var string Importe 2 de facturación */
    public const IM2CLI = 'F_CLI.IM2CLI';

    /** @var string Importe 3 de facturación */
    public const IM3CLI = 'F_CLI.IM3CLI';

    /** @var string Importe 4 de facturación */
    public const IM4CLI = 'F_CLI.IM4CLI';

    /** @var string Importe 5 de facturación */
    public const IM5CLI = 'F_CLI.IM5CLI';

    /** @var string Ruta */
    public const RUTCLI = 'F_CLI.RUTCLI';

    /** @var string SWIFT del banco */
    public const SWICLI = 'F_CLI.SWICLI';

    /** @var string Teléfonos de contacto */
    public const GIRCLI = 'F_CLI.GIRCLI';

    /** @var string [E]Código ususario web */
    public const CUWCLI = 'F_CLI.CUWCLI';

    /** @var string [E]Clave usuario web */
    public const CAWCLI = 'F_CLI.CAWCLI';

    /** @var string [E]Permitir su utilización en internet */
    public const SUWCLI = 'F_CLI.SUWCLI';

    /** @var string [E]Mensaje emergente web */
    public const MEWCLI = 'F_CLI.MEWCLI';

    /** @var string [L=#0;Sin seleccionar#1;Habitual#2;Esporádico#3;Dado de baja#4;En captación]Estado */
    public const ESTCLI = 'F_CLI.ESTCLI';

    /** @var string Artículo 1 de facturación */
    public const AR1CLI = 'F_CLI.AR1CLI';

    /** @var string Artículo 2 de facturación */
    public const AR2CLI = 'F_CLI.AR2CLI';

    /** @var string Artículo 3 de facturación */
    public const AR3CLI = 'F_CLI.AR3CLI';

    /** @var string Artículo 4 de facturación */
    public const AR4CLI = 'F_CLI.AR4CLI';

    /** @var string Artículo 5 de facturación */
    public const AR5CLI = 'F_CLI.AR5CLI';

    /** @var string [E]FACTURA ELECTRÓNICA DEL CLIENTE, 0 = NO; 1 = SI */
    public const FELCLI = 'F_CLI.FELCLI';

    /** @var string Transportista */
    public const TRACLI = 'F_CLI.TRACLI';

    /** @var string [E]Copias de factura a imprimir */
    public const NCFCLI = 'F_CLI.NCFCLI';

    /** @var string Fecha de nacimiento */
    public const FNACLI = 'F_CLI.FNACLI';

    /** @var string [E]Foto del cliente */
    public const FOTCLI = 'F_CLI.FOTCLI';

    /** @var string [E]Cuenta skype del cliente */
    public const SKYCLI = 'F_CLI.SKYCLI';

    /** @var string Nombre de la persona de contacto 1 */
    public const NO1CLI = 'F_CLI.NO1CLI';

    /** @var string Teléfono de la persona de contacto 1 */
    public const TF1CLI = 'F_CLI.TF1CLI';

    /** @var string E-mail de la persona de contacto 1 */
    public const EM1CLI = 'F_CLI.EM1CLI';

    /** @var string Nombre de la persona de contacto 2 */
    public const NO2CLI = 'F_CLI.NO2CLI';

    /** @var string Teléfono de la persona de contacto 2 */
    public const TF2CLI = 'F_CLI.TF2CLI';

    /** @var string E-mail de la persona de contacto 2 */
    public const EM2CLI = 'F_CLI.EM2CLI';

    /** @var string Nombre de la persona de contacto 3 */
    public const NO3CLI = 'F_CLI.NO3CLI';

    /** @var string Teléfono de la persona de contacto 3 */
    public const TF3CLI = 'F_CLI.TF3CLI';

    /** @var string E-mail de la persona de contacto 3 */
    public const EM3CLI = 'F_CLI.EM3CLI';

    /** @var string Nombre de la persona de contacto 4 */
    public const NO4CLI = 'F_CLI.NO4CLI';

    /** @var string Teléfono de la persona de contacto 4 */
    public const TF4CLI = 'F_CLI.TF4CLI';

    /** @var string E-mail de la persona de contacto 4 */
    public const EM4CLI = 'F_CLI.EM4CLI';

    /** @var string Nombre de la persona de contacto 5 */
    public const NO5CLI = 'F_CLI.NO5CLI';

    /** @var string Teléfono de la persona de contacto 5 */
    public const TF5CLI = 'F_CLI.TF5CLI';

    /** @var string E-mail de la persona de contacto 5 */
    public const EM5CLI = 'F_CLI.EM5CLI';

    /** @var string [L=#0;No#1;Sí]Retención */
    public const RETCLI = 'F_CLI.RETCLI';

    /** @var string Divisa */
    public const CTMCLI = 'F_CLI.CTMCLI';

    public const MNPCLI = 'F_CLI.MNPCLI';

    public const IFICLI = 'F_CLI.IFICLI';

    /** @var string [L=#0;IVA#1;IGIC]Tipo de impuesto */
    public const IMPCLI = 'F_CLI.IMPCLI';

    /** @var string [E]Número de copias de albaranes */
    public const NCACLI = 'F_CLI.NCACLI';

    /** @var string Comisión por defecto para agentes */
    public const CAMCLI = 'F_CLI.CAMCLI';

    /** @var string Concepto 6 de facturación */
    public const CO6CLI = 'F_CLI.CO6CLI';

    /** @var string Importe 6 de facturación */
    public const IM6CLI = 'F_CLI.IM6CLI';

    /** @var string Artículo 6 de facturación */
    public const AR6CLI = 'F_CLI.AR6CLI';

    /** @var string Concepto 7 de facturación */
    public const CO7CLI = 'F_CLI.CO7CLI';

    /** @var string Importe 7 de facturación */
    public const IM7CLI = 'F_CLI.IM7CLI';

    /** @var string Artículo 7 de facturación */
    public const AR7CLI = 'F_CLI.AR7CLI';

    /** @var string Concepto 8 de facturación */
    public const CO8CLI = 'F_CLI.CO8CLI';

    /** @var string Importe 8 de facturación */
    public const IM8CLI = 'F_CLI.IM8CLI';

    /** @var string Artículo 8 de facturación */
    public const AR8CLI = 'F_CLI.AR8CLI';

    /** @var string Concepto 9 de facturación */
    public const CO9CLI = 'F_CLI.CO9CLI';

    /** @var string Importe 9 de facturación */
    public const IM9CLI = 'F_CLI.IM9CLI';

    /** @var string Artículo 9 de facturación */
    public const AR9CLI = 'F_CLI.AR9CLI';

    /** @var string Concepto 10 de facturación */
    public const CO10CLI = 'F_CLI.CO10CLI';

    /** @var string Importe 10 de facturación */
    public const IM10CLI = 'F_CLI.IM10CLI';

    /** @var string Artículo 10 de facturación */
    public const AR10CLI = 'F_CLI.AR10CLI';

    /** @var string Concepto 11 de facturación */
    public const CO11CLI = 'F_CLI.CO11CLI';

    /** @var string Importe 11 de facturación */
    public const IM11CLI = 'F_CLI.IM11CLI';

    /** @var string Artículo 11 de facturación */
    public const AR11CLI = 'F_CLI.AR11CLI';

    /** @var string Concepto 12 de facturación */
    public const CO12CLI = 'F_CLI.CO12CLI';

    /** @var string Importe 12 de facturación */
    public const IM12CLI = 'F_CLI.IM12CLI';

    /** @var string Artículo 12 de facturación */
    public const AR12CLI = 'F_CLI.AR12CLI';

    public const ME1CLI = 'F_CLI.ME1CLI';

    public const ME2CLI = 'F_CLI.ME2CLI';

    public const ME3CLI = 'F_CLI.ME3CLI';

    public const ME4CLI = 'F_CLI.ME4CLI';

    public const ME5CLI = 'F_CLI.ME5CLI';

    public const ME6CLI = 'F_CLI.ME6CLI';

    public const ME7CLI = 'F_CLI.ME7CLI';

    public const ME8CLI = 'F_CLI.ME8CLI';

    public const ME9CLI = 'F_CLI.ME9CLI';

    public const ME10CLI = 'F_CLI.ME10CLI';

    public const ME11CLI = 'F_CLI.ME11CLI';

    public const ME12CLI = 'F_CLI.ME12CLI';

    /** @var string Carpeta asociada al cliente */
    public const CASCLI = 'F_CLI.CASCLI';

    /** @var string Exportar a movilsol (0 = Si, 1 = No) */
    public const EMOCLI = 'F_CLI.EMOCLI';

    /** @var string % de retención */
    public const PRECLI = 'F_CLI.PRECLI';

    /** @var string % dto. comercial */
    public const DTCCLI = 'F_CLI.DTCCLI';

    public const EPETCLI = 'F_CLI.EPETCLI';

    public const ERECCLI = 'F_CLI.ERECCLI';

    public const ECLICLI = 'F_CLI.ECLICLI';

    public const EPAGCLI = 'F_CLI.EPAGCLI';

    public const FUMCLI = 'F_CLI.FUMCLI';

    public const PGCCLI = 'F_CLI.PGCCLI';

    public const RESCLI = 'F_CLI.RESCLI';

    public const RFICLI = 'F_CLI.RFICLI';

    public const PRACLI = 'F_CLI.PRACLI';

    public const ACTCLI = 'F_CLI.ACTCLI';

    public const ECOCLI = 'F_CLI.ECOCLI';

    public const ECNCLI = 'F_CLI.ECNCLI';

    public const EADCLI = 'F_CLI.EADCLI';

    public const TWICLI = 'F_CLI.TWICLI';

    public const A1KCLI = 'F_CLI.A1KCLI';

    public const MOVCLI = 'F_CLI.MOVCLI';

    public const CPFCLI = 'F_CLI.CPFCLI';

    public const RCCCLI = 'F_CLI.RCCCLI';

    public const MUTCLI = 'F_CLI.MUTCLI';

    public const MRECLI = 'F_CLI.MRECLI';

    public const MFECLI = 'F_CLI.MFECLI';

    /** @var string O.Contable Código DIR3 */
    public const ACO1CLI = 'F_CLI.ACO1CLI';

    /** @var string O.Contable Domicilio */
    public const ADO1CLI = 'F_CLI.ADO1CLI';

    /** @var string O.Contable Código postal */
    public const ACP1CLI = 'F_CLI.ACP1CLI';

    /** @var string O.Contable Población */
    public const APO1CLI = 'F_CLI.APO1CLI';

    /** @var string O.Contable Provincia */
    public const APR1CLI = 'F_CLI.APR1CLI';

    /** @var string O.Contable País */
    public const APA1CLI = 'F_CLI.APA1CLI';

    /** @var string O. Gestor Código DIR3 */
    public const ACO2CLI = 'F_CLI.ACO2CLI';

    /** @var string O.Gestor Domicilio */
    public const ADO2CLI = 'F_CLI.ADO2CLI';

    /** @var string O. Gestor Código postal */
    public const ACP2CLI = 'F_CLI.ACP2CLI';

    /** @var string O.Gestor Población */
    public const APO2CLI = 'F_CLI.APO2CLI';

    /** @var string O.Gestor Provincia */
    public const APR2CLI = 'F_CLI.APR2CLI';

    /** @var string O.Gestor País */
    public const APA2CLI = 'F_CLI.APA2CLI';

    /** @var string U.Tramitadora Código DIR3 */
    public const ACO3CLI = 'F_CLI.ACO3CLI';

    /** @var string U.Tramitadora Domicilio */
    public const ADO3CLI = 'F_CLI.ADO3CLI';

    /** @var string U.Tramitadora Código postal */
    public const ACP3CLI = 'F_CLI.ACP3CLI';

    /** @var string U.Tramitadora Población */
    public const APO3CLI = 'F_CLI.APO3CLI';

    /** @var string U.Tramitadora Provincia */
    public const APR3CLI = 'F_CLI.APR3CLI';

    /** @var string U.Tramitadora País */
    public const APA3CLI = 'F_CLI.APA3CLI';

    /** @var string Iva en país de residencia */
    public const IEUCLI = 'F_CLI.IEUCLI';

    /** @var string O.Comprador Código DIR3 */
    public const ACO4CLI = 'F_CLI.ACO4CLI';

    /** @var string O.Comprador Domicilio */
    public const ADO4CLI = 'F_CLI.ADO4CLI';

    /** @var string O.Comprador Código postal */
    public const ACP4CLI = 'F_CLI.ACP4CLI';

    /** @var string O.Comprador Población */
    public const APO4CLI = 'F_CLI.APO4CLI';

    /** @var string O.Comprador Provincia */
    public const APR4CLI = 'F_CLI.APR4CLI';

    /** @var string O.Comprador País */
    public const APA4CLI = 'F_CLI.APA4CLI';

    /** @var string Banco para transferencias */
    public const BTRCLI = 'F_CLI.BTRCLI';

    /** @var string Configuración para generación de factura-e */
    public const CFECLI = 'F_CLI.CFECLI';

    public const MDFCLI = 'F_CLI.MDFCLI';

    public const COPCLI = 'F_CLI.COPCLI';

    public const APDCLI = 'F_CLI.APDCLI';

    public const PECCLI = 'F_CLI.PECCLI';

    public const MDACLI = 'F_CLI.MDACLI';

    public const TRECLI = 'F_CLI.TRECLI';

    public const CVICLI = 'F_CLI.CVICLI';

    public const FAVCLI = 'F_CLI.FAVCLI';

    public const FCBCLI = 'F_CLI.FCBCLI';

    public const ITGCLI = 'F_CLI.ITGCLI';

    public const FEFCLI = 'F_CLI.FEFCLI';
}
