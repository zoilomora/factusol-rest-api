<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Persistence;

final class F_CLI
{
    public const TABLE_NAME = 'F_CLI';

    /** @var string Código */
    public const CODCLI = 'CODCLI';

    /** @var string Código contable */
    public const CCOCLI = 'CCOCLI';

    /** @var string N.I.F. */
    public const NIFCLI = 'NIFCLI';

    /** @var string Nombre fiscal */
    public const NOFCLI = 'NOFCLI';

    /** @var string Nombre comercial */
    public const NOCCLI = 'NOCCLI';

    /** @var string Domicilio */
    public const DOMCLI = 'DOMCLI';

    /** @var string Población */
    public const POBCLI = 'POBCLI';

    /** @var string Cód. Postal */
    public const CPOCLI = 'CPOCLI';

    /** @var string Provincia */
    public const PROCLI = 'PROCLI';

    /** @var string Teléfono */
    public const TELCLI = 'TELCLI';

    /** @var string Fax */
    public const FAXCLI = 'FAXCLI';

    /** @var string Persona de contacto */
    public const PCOCLI = 'PCOCLI';

    /** @var string [F=00000]Agente comercial */
    public const AGECLI = 'AGECLI';

    /** @var string Banco */
    public const BANCLI = 'BANCLI';

    /** @var string Entidad */
    public const ENTCLI = 'ENTCLI';

    /** @var string Oficina */
    public const OFICLI = 'OFICLI';

    /** @var string Dígito de control */
    public const DCOCLI = 'DCOCLI';

    /** @var string Nº de cuenta */
    public const CUECLI = 'CUECLI';

    /** @var string Forma de pago */
    public const FPACLI = 'FPACLI';

    /** @var string Porcentaje de financiación */
    public const FINCLI = 'FINCLI';

    /** @var string Porcentaje de pronto pago */
    public const PPACLI = 'PPACLI';

    /** @var string [E]Tarifa */
    public const TARCLI = 'TARCLI';

    /** @var string Día de pago 1 */
    public const DP1CLI = 'DP1CLI';

    /** @var string Día de pago 2 */
    public const DP2CLI = 'DP2CLI';

    /** @var string Día de pago 3 */
    public const DP3CLI = 'DP3CLI';

    /** @var string Tipo de cliente */
    public const TCLCLI = 'TCLCLI';

    /** @var string Descuento 1 */
    public const DT1CLI = 'DT1CLI';

    /** @var string Descuento 2 */
    public const DT2CLI = 'DT2CLI';

    /** @var string Descuento 3 */
    public const DT3CLI = 'DT3CLI';

    /** @var string [E]Tarifa especial; 0: No, 1:si */
    public const TESCLI = 'TESCLI';

    /** @var string Código de proveedor */
    public const CPRCLI = 'CPRCLI';

    /** @var string [L=#Pagados#1;Debidos]Portes */
    public const TPOCLI = 'TPOCLI';

    /** @var string Portes (texto) */
    public const PORCLI = 'PORCLI';

    /** @var string [L=#0;Con IVA#1;Sin IVA#2;Intracomunitario#3;Importación]Tipo de IVA */
    public const IVACLI = 'IVACLI';

    /** @var string [L=#0;IVA1AUT#1;IVA2AUT#2;IVA3AUT#3;Exento]Porcentaje de IVA */
    public const TIVCLI = 'TIVCLI';

    /** @var string [L=#No#1;Sí]Recargo de equivalencia */
    public const REQCLI = 'REQCLI';

    /** @var string Fecha de alta */
    public const FALCLI = 'FALCLI';

    /** @var string E-mail */
    public const EMACLI = 'EMACLI';

    /** @var string Web */
    public const WEBCLI = 'WEBCLI';

    /** @var string Mensaje emergente */
    public const MEMCLI = 'MEMCLI';

    /** @var string Observaciones */
    public const OBSCLI = 'OBSCLI';

    /** @var string Horario */
    public const HORCLI = 'HORCLI';

    /** @var string Vacaciones (desde) */
    public const VDECLI = 'VDECLI';

    /** @var string Vacaciones (hasta) */
    public const VHACLI = 'VHACLI';

    /** @var string [E]Crear recibo al factura */
    public const CRFCLI = 'CRFCLI';

    /** @var string [E]No vender a este cliente */
    public const NVCCLI = 'NVCCLI';

    /** @var string [E]No facturar a este cliente */
    public const NFCCLI = 'NFCCLI';

    /** @var string [E]No imprimir este cliente */
    public const NICCLI = 'NICCLI';

    /** @var string [E]0: Euros;1:Pesetas */
    public const MONCLI = 'MONCLI';

    /** @var string País */
    public const PAICLI = 'PAICLI';

    /** @var string Nº de serie predeterminado */
    public const DOCCLI = 'DOCCLI';

    /** @var string Dirección del banco */
    public const DBACLI = 'DBACLI';

    /** @var string Población del banco */
    public const PBACLI = 'PBACLI';

    /** @var string IBAN del banco */
    public const SWFCLI = 'SWFCLI';

    /** @var string Concepto 1 de facturación */
    public const CO1CLI = 'CO1CLI';

    /** @var string Concepto 2 de facturación */
    public const CO2CLI = 'CO2CLI';

    /** @var string Concepto 3 de facturación */
    public const CO3CLI = 'CO3CLI';

    /** @var string Concepto 4 de facturación */
    public const CO4CLI = 'CO4CLI';

    /** @var string Concepto 5 de facturación */
    public const CO5CLI = 'CO5CLI';

    /** @var string Importe 1 de facturación */
    public const IM1CLI = 'IM1CLI';

    /** @var string Importe 2 de facturación */
    public const IM2CLI = 'IM2CLI';

    /** @var string Importe 3 de facturación */
    public const IM3CLI = 'IM3CLI';

    /** @var string Importe 4 de facturación */
    public const IM4CLI = 'IM4CLI';

    /** @var string Importe 5 de facturación */
    public const IM5CLI = 'IM5CLI';

    /** @var string Ruta */
    public const RUTCLI = 'RUTCLI';

    /** @var string SWIFT del banco */
    public const SWICLI = 'SWICLI';

    /** @var string Teléfonos de contacto */
    public const GIRCLI = 'GIRCLI';

    /** @var string [E]Código ususario web */
    public const CUWCLI = 'CUWCLI';

    /** @var string [E]Clave usuario web */
    public const CAWCLI = 'CAWCLI';

    /** @var string [E]Permitir su utilización en internet */
    public const SUWCLI = 'SUWCLI';

    /** @var string [E]Mensaje emergente web */
    public const MEWCLI = 'MEWCLI';

    /** @var string [L=#0;Sin seleccionar#1;Habitual#2;Esporádico#3;Dado de baja#4;En captación]Estado */
    public const ESTCLI = 'ESTCLI';

    /** @var string Artículo 1 de facturación */
    public const AR1CLI = 'AR1CLI';

    /** @var string Artículo 2 de facturación */
    public const AR2CLI = 'AR2CLI';

    /** @var string Artículo 3 de facturación */
    public const AR3CLI = 'AR3CLI';

    /** @var string Artículo 4 de facturación */
    public const AR4CLI = 'AR4CLI';

    /** @var string Artículo 5 de facturación */
    public const AR5CLI = 'AR5CLI';

    /** @var string [E]FACTURA ELECTRÓNICA DEL CLIENTE, 0 = NO; 1 = SI */
    public const FELCLI = 'FELCLI';

    /** @var string Transportista */
    public const TRACLI = 'TRACLI';

    /** @var string [E]Copias de factura a imprimir */
    public const NCFCLI = 'NCFCLI';

    /** @var string Fecha de nacimiento */
    public const FNACLI = 'FNACLI';

    /** @var string [E]Foto del cliente */
    public const FOTCLI = 'FOTCLI';

    /** @var string [E]Cuenta skype del cliente */
    public const SKYCLI = 'SKYCLI';

    /** @var string Nombre de la persona de contacto 1 */
    public const NO1CLI = 'NO1CLI';

    /** @var string Teléfono de la persona de contacto 1 */
    public const TF1CLI = 'TF1CLI';

    /** @var string E-mail de la persona de contacto 1 */
    public const EM1CLI = 'EM1CLI';

    /** @var string Nombre de la persona de contacto 2 */
    public const NO2CLI = 'NO2CLI';

    /** @var string Teléfono de la persona de contacto 2 */
    public const TF2CLI = 'TF2CLI';

    /** @var string E-mail de la persona de contacto 2 */
    public const EM2CLI = 'EM2CLI';

    /** @var string Nombre de la persona de contacto 3 */
    public const NO3CLI = 'NO3CLI';

    /** @var string Teléfono de la persona de contacto 3 */
    public const TF3CLI = 'TF3CLI';

    /** @var string E-mail de la persona de contacto 3 */
    public const EM3CLI = 'EM3CLI';

    /** @var string Nombre de la persona de contacto 4 */
    public const NO4CLI = 'NO4CLI';

    /** @var string Teléfono de la persona de contacto 4 */
    public const TF4CLI = 'TF4CLI';

    /** @var string E-mail de la persona de contacto 4 */
    public const EM4CLI = 'EM4CLI';

    /** @var string Nombre de la persona de contacto 5 */
    public const NO5CLI = 'NO5CLI';

    /** @var string Teléfono de la persona de contacto 5 */
    public const TF5CLI = 'TF5CLI';

    /** @var string E-mail de la persona de contacto 5 */
    public const EM5CLI = 'EM5CLI';

    /** @var string [L=#0;No#1;Sí]Retención */
    public const RETCLI = 'RETCLI';

    /** @var string Divisa */
    public const CTMCLI = 'CTMCLI';

    public const MNPCLI = 'MNPCLI';

    public const IFICLI = 'IFICLI';

    /** @var string [L=#0;IVA#1;IGIC]Tipo de impuesto */
    public const IMPCLI = 'IMPCLI';

    /** @var string [E]Número de copias de albaranes */
    public const NCACLI = 'NCACLI';

    /** @var string Comisión por defecto para agentes */
    public const CAMCLI = 'CAMCLI';

    /** @var string Concepto 6 de facturación */
    public const CO6CLI = 'CO6CLI';

    /** @var string Importe 6 de facturación */
    public const IM6CLI = 'IM6CLI';

    /** @var string Artículo 6 de facturación */
    public const AR6CLI = 'AR6CLI';

    /** @var string Concepto 7 de facturación */
    public const CO7CLI = 'CO7CLI';

    /** @var string Importe 7 de facturación */
    public const IM7CLI = 'IM7CLI';

    /** @var string Artículo 7 de facturación */
    public const AR7CLI = 'AR7CLI';

    /** @var string Concepto 8 de facturación */
    public const CO8CLI = 'CO8CLI';

    /** @var string Importe 8 de facturación */
    public const IM8CLI = 'IM8CLI';

    /** @var string Artículo 8 de facturación */
    public const AR8CLI = 'AR8CLI';

    /** @var string Concepto 9 de facturación */
    public const CO9CLI = 'CO9CLI';

    /** @var string Importe 9 de facturación */
    public const IM9CLI = 'IM9CLI';

    /** @var string Artículo 9 de facturación */
    public const AR9CLI = 'AR9CLI';

    /** @var string Concepto 10 de facturación */
    public const CO10CLI = 'CO10CLI';

    /** @var string Importe 10 de facturación */
    public const IM10CLI = 'IM10CLI';

    /** @var string Artículo 10 de facturación */
    public const AR10CLI = 'AR10CLI';

    /** @var string Concepto 11 de facturación */
    public const CO11CLI = 'CO11CLI';

    /** @var string Importe 11 de facturación */
    public const IM11CLI = 'IM11CLI';

    /** @var string Artículo 11 de facturación */
    public const AR11CLI = 'AR11CLI';

    /** @var string Concepto 12 de facturación */
    public const CO12CLI = 'CO12CLI';

    /** @var string Importe 12 de facturación */
    public const IM12CLI = 'IM12CLI';

    /** @var string Artículo 12 de facturación */
    public const AR12CLI = 'AR12CLI';

    public const ME1CLI = 'ME1CLI';

    public const ME2CLI = 'ME2CLI';

    public const ME3CLI = 'ME3CLI';

    public const ME4CLI = 'ME4CLI';

    public const ME5CLI = 'ME5CLI';

    public const ME6CLI = 'ME6CLI';

    public const ME7CLI = 'ME7CLI';

    public const ME8CLI = 'ME8CLI';

    public const ME9CLI = 'ME9CLI';

    public const ME10CLI = 'ME10CLI';

    public const ME11CLI = 'ME11CLI';

    public const ME12CLI = 'ME12CLI';

    /** @var string Carpeta asociada al cliente */
    public const CASCLI = 'CASCLI';

    /** @var string Exportar a movilsol (0 = Si, 1 = No) */
    public const EMOCLI = 'EMOCLI';

    /** @var string % de retención */
    public const PRECLI = 'PRECLI';

    /** @var string % dto. comercial */
    public const DTCCLI = 'DTCCLI';

    public const EPETCLI = 'EPETCLI';

    public const ERECCLI = 'ERECCLI';

    public const ECLICLI = 'ECLICLI';

    public const EPAGCLI = 'EPAGCLI';

    public const FUMCLI = 'FUMCLI';

    public const PGCCLI = 'PGCCLI';

    public const RESCLI = 'RESCLI';

    public const RFICLI = 'RFICLI';

    public const PRACLI = 'PRACLI';

    public const ACTCLI = 'ACTCLI';

    public const ECOCLI = 'ECOCLI';

    public const ECNCLI = 'ECNCLI';

    public const EADCLI = 'EADCLI';

    public const TWICLI = 'TWICLI';

    public const A1KCLI = 'A1KCLI';

    public const MOVCLI = 'MOVCLI';

    public const CPFCLI = 'CPFCLI';

    public const RCCCLI = 'RCCCLI';

    public const MUTCLI = 'MUTCLI';

    public const MRECLI = 'MRECLI';

    public const MFECLI = 'MFECLI';

    /** @var string O.Contable Código DIR3 */
    public const ACO1CLI = 'ACO1CLI';

    /** @var string O.Contable Domicilio */
    public const ADO1CLI = 'ADO1CLI';

    /** @var string O.Contable Código postal */
    public const ACP1CLI = 'ACP1CLI';

    /** @var string O.Contable Población */
    public const APO1CLI = 'APO1CLI';

    /** @var string O.Contable Provincia */
    public const APR1CLI = 'APR1CLI';

    /** @var string O.Contable País */
    public const APA1CLI = 'APA1CLI';

    /** @var string O. Gestor Código DIR3 */
    public const ACO2CLI = 'ACO2CLI';

    /** @var string O.Gestor Domicilio */
    public const ADO2CLI = 'ADO2CLI';

    /** @var string O. Gestor Código postal */
    public const ACP2CLI = 'ACP2CLI';

    /** @var string O.Gestor Población */
    public const APO2CLI = 'APO2CLI';

    /** @var string O.Gestor Provincia */
    public const APR2CLI = 'APR2CLI';

    /** @var string O.Gestor País */
    public const APA2CLI = 'APA2CLI';

    /** @var string U.Tramitadora Código DIR3 */
    public const ACO3CLI = 'ACO3CLI';

    /** @var string U.Tramitadora Domicilio */
    public const ADO3CLI = 'ADO3CLI';

    /** @var string U.Tramitadora Código postal */
    public const ACP3CLI = 'ACP3CLI';

    /** @var string U.Tramitadora Población */
    public const APO3CLI = 'APO3CLI';

    /** @var string U.Tramitadora Provincia */
    public const APR3CLI = 'APR3CLI';

    /** @var string U.Tramitadora País */
    public const APA3CLI = 'APA3CLI';

    /** @var string Iva en país de residencia */
    public const IEUCLI = 'IEUCLI';

    /** @var string O.Comprador Código DIR3 */
    public const ACO4CLI = 'ACO4CLI';

    /** @var string O.Comprador Domicilio */
    public const ADO4CLI = 'ADO4CLI';

    /** @var string O.Comprador Código postal */
    public const ACP4CLI = 'ACP4CLI';

    /** @var string O.Comprador Población */
    public const APO4CLI = 'APO4CLI';

    /** @var string O.Comprador Provincia */
    public const APR4CLI = 'APR4CLI';

    /** @var string O.Comprador País */
    public const APA4CLI = 'APA4CLI';

    /** @var string Banco para transferencias */
    public const BTRCLI = 'BTRCLI';

    /** @var string Configuración para generación de factura-e */
    public const CFECLI = 'CFECLI';

    public const MDFCLI = 'MDFCLI';

    public const COPCLI = 'COPCLI';

    public const APDCLI = 'APDCLI';

    public const PECCLI = 'PECCLI';

    public const MDACLI = 'MDACLI';

    public const TRECLI = 'TRECLI';

    public const CVICLI = 'CVICLI';

    public const FAVCLI = 'FAVCLI';

    public const FCBCLI = 'FCBCLI';

    public const ITGCLI = 'ITGCLI';

    public const FEFCLI = 'FEFCLI';
}
