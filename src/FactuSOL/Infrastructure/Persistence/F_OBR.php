<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Persistence;

final class F_OBR
{
    public const TABLE_NAME = 'F_OBR';

    /** @var string [F=00000]Cliente */
    public const CLIOBR = 'CLIOBR';

    /** @var string Código */
    public const CODOBR = 'CODOBR';

    /** @var string Nombre */
    public const NOMOBR = 'NOMOBR';

    /** @var string Dirección */
    public const DIROBR = 'DIROBR';

    /** @var string Población */
    public const POBOBR = 'POBOBR';

    /** @var string Cód. Postal */
    public const CPOOBR = 'CPOOBR';

    /** @var string Provincia */
    public const PROOBR = 'PROOBR';

    /** @var string Teléfono */
    public const TELOBR = 'TELOBR';

    /** @var string Persona de contacto */
    public const PCOOBR = 'PCOOBR';

    /** @var string [F=00000]Agente */
    public const AGEOBR = 'AGEOBR';

    /** @var string [E]DIRECCION DE OBRA POR DEFECTO; 0 = NO, 1 = ALBARANES, 2 = FACTURAS, 3 = ALBARANES Y FACTURAS */
    public const FADOBR = 'FADOBR';

    /** @var string [E]LLAMANTE */
    public const LLAOBR = 'LLAOBR';

    /** @var string E-mail */
    public const EMAOBR = 'EMAOBR';

    /** @var string País */
    public const PAIOBR = 'PAIOBR';

    /** @var string [E]Dirección predeterminada para la impresión de partes */
    public const REPOBR = 'REPOBR';

    /** @var string O.Contable Código DIR3 */
    public const ACO1OBR = 'ACO1OBR';

    /** @var string O.Contable Domicilio */
    public const ADO1OBR = 'ADO1OBR';

    /** @var string O.Contable Código postal */
    public const ACP1OBR = 'ACP1OBR';

    /** @var string O.Contable Población */
    public const APO1OBR = 'APO1OBR';

    /** @var string O.Contable Provincia */
    public const APR1OBR = 'APR1OBR';

    /** @var string O.Contable País */
    public const APA1OBR = 'APA1OBR';

    /** @var string O. Gestor Código DIR3 */
    public const ACO2OBR = 'ACO2OBR';

    /** @var string O.Gestor Domicilio */
    public const ADO2OBR = 'ADO2OBR';

    /** @var string O. Gestor Código postal */
    public const ACP2OBR = 'ACP2OBR';

    /** @var string O.Gestor Población */
    public const APO2OBR = 'APO2OBR';

    /** @var string O.Gestor Provincia */
    public const APR2OBR = 'APR2OBR';

    /** @var string O.Gestor País */
    public const APA2OBR = 'APA2OBR';

    /** @var string U.Tramitadora Código DIR3 */
    public const ACO3OBR = 'ACO3OBR';

    /** @var string U.Tramitadora Domicilio */
    public const ADO3OBR = 'ADO3OBR';

    /** @var string U.Tramitadora Código postal */
    public const ACP3OBR = 'ACP3OBR';

    /** @var string U.Tramitadora Población */
    public const APO3OBR = 'APO3OBR';

    /** @var string U.Tramitadora Provincia */
    public const APR3OBR = 'APR3OBR';

    /** @var string U.Tramitadora País */
    public const APA3OBR = 'APA3OBR';

    /** @var string O.Comprador Código DIR3 */
    public const ACO4OBR = 'ACO4OBR';

    /** @var string O.Comprador Domicilio */
    public const ADO4OBR = 'ADO4OBR';

    /** @var string O.Comprador Código postal */
    public const ACP4OBR = 'ACP4OBR';

    /** @var string O.Comprador Población */
    public const APO4OBR = 'APO4OBR';

    /** @var string O.Comprador Provincia */
    public const APR4OBR = 'APR4OBR';

    /** @var string O.Comprador País */
    public const APA4OBR = 'APA4OBR';

    /** @var string Banco para transferencias */
    public const BTROBR = 'BTROBR';
}
