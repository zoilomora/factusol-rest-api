<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Persistence;

final class F_OBR
{
    public const TABLE_NAME = 'F_OBR';

    /** @var string [F=00000]Cliente */
    public const CLIOBR = 'F_OBR.CLIOBR';

    /** @var string Código */
    public const CODOBR = 'F_OBR.CODOBR';

    /** @var string Nombre */
    public const NOMOBR = 'F_OBR.NOMOBR';

    /** @var string Dirección */
    public const DIROBR = 'F_OBR.DIROBR';

    /** @var string Población */
    public const POBOBR = 'F_OBR.POBOBR';

    /** @var string Cód. Postal */
    public const CPOOBR = 'F_OBR.CPOOBR';

    /** @var string Provincia */
    public const PROOBR = 'F_OBR.PROOBR';

    /** @var string Teléfono */
    public const TELOBR = 'F_OBR.TELOBR';

    /** @var string Persona de contacto */
    public const PCOOBR = 'F_OBR.PCOOBR';

    /** @var string [F=00000]Agente */
    public const AGEOBR = 'F_OBR.AGEOBR';

    /** @var string [E]DIRECCION DE OBRA POR DEFECTO; 0 = NO, 1 = ALBARANES, 2 = FACTURAS, 3 = ALBARANES Y FACTURAS */
    public const FADOBR = 'F_OBR.FADOBR';

    /** @var string [E]LLAMANTE */
    public const LLAOBR = 'F_OBR.LLAOBR';

    /** @var string E-mail */
    public const EMAOBR = 'F_OBR.EMAOBR';

    /** @var string País */
    public const PAIOBR = 'F_OBR.PAIOBR';

    /** @var string [E]Dirección predeterminada para la impresión de partes */
    public const REPOBR = 'F_OBR.REPOBR';

    /** @var string O.Contable Código DIR3 */
    public const ACO1OBR = 'F_OBR.ACO1OBR';

    /** @var string O.Contable Domicilio */
    public const ADO1OBR = 'F_OBR.ADO1OBR';

    /** @var string O.Contable Código postal */
    public const ACP1OBR = 'F_OBR.ACP1OBR';

    /** @var string O.Contable Población */
    public const APO1OBR = 'F_OBR.APO1OBR';

    /** @var string O.Contable Provincia */
    public const APR1OBR = 'F_OBR.APR1OBR';

    /** @var string O.Contable País */
    public const APA1OBR = 'F_OBR.APA1OBR';

    /** @var string O. Gestor Código DIR3 */
    public const ACO2OBR = 'F_OBR.ACO2OBR';

    /** @var string O.Gestor Domicilio */
    public const ADO2OBR = 'F_OBR.ADO2OBR';

    /** @var string O. Gestor Código postal */
    public const ACP2OBR = 'F_OBR.ACP2OBR';

    /** @var string O.Gestor Población */
    public const APO2OBR = 'F_OBR.APO2OBR';

    /** @var string O.Gestor Provincia */
    public const APR2OBR = 'F_OBR.APR2OBR';

    /** @var string O.Gestor País */
    public const APA2OBR = 'F_OBR.APA2OBR';

    /** @var string U.Tramitadora Código DIR3 */
    public const ACO3OBR = 'F_OBR.ACO3OBR';

    /** @var string U.Tramitadora Domicilio */
    public const ADO3OBR = 'F_OBR.ADO3OBR';

    /** @var string U.Tramitadora Código postal */
    public const ACP3OBR = 'F_OBR.ACP3OBR';

    /** @var string U.Tramitadora Población */
    public const APO3OBR = 'F_OBR.APO3OBR';

    /** @var string U.Tramitadora Provincia */
    public const APR3OBR = 'F_OBR.APR3OBR';

    /** @var string U.Tramitadora País */
    public const APA3OBR = 'F_OBR.APA3OBR';

    /** @var string O.Comprador Código DIR3 */
    public const ACO4OBR = 'F_OBR.ACO4OBR';

    /** @var string O.Comprador Domicilio */
    public const ADO4OBR = 'F_OBR.ADO4OBR';

    /** @var string O.Comprador Código postal */
    public const ACP4OBR = 'F_OBR.ACP4OBR';

    /** @var string O.Comprador Población */
    public const APO4OBR = 'F_OBR.APO4OBR';

    /** @var string O.Comprador Provincia */
    public const APR4OBR = 'F_OBR.APR4OBR';

    /** @var string O.Comprador País */
    public const APA4OBR = 'F_OBR.APA4OBR';

    /** @var string Banco para transferencias */
    public const BTROBR = 'F_OBR.BTROBR';
}
