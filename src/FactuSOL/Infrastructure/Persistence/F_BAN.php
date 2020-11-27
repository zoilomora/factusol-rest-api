<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Persistence;

final class F_BAN
{
    public const TABLE_NAME = 'F_BAN';

    /** @var string Código */
    public const CODBAN = 'CODBAN';

    /** @var string Nombre */
    public const NOMBAN = 'NOMBAN';

    /** @var string Domicilio */
    public const DOMBAN = 'DOMBAN';

    /** @var string Población */
    public const POBBAN = 'POBBAN';

    /** @var string Cód. Postal */
    public const CPOBAN = 'CPOBAN';

    /** @var string Provincia */
    public const PROBAN = 'PROBAN';

    /** @var string Teléfono */
    public const TELBAN = 'TELBAN';

    /** @var string Fax */
    public const FAXBAN = 'FAXBAN';

    /** @var string Director */
    public const DIRBAN = 'DIRBAN';

    /** @var string Teléfono director */
    public const TDIBAN = 'TDIBAN';

    /** @var string Interventor */
    public const INTBAN = 'INTBAN';

    /** @var string Teléfono interventor */
    public const TINBAN = 'TINBAN';

    /** @var string Comercial */
    public const COMBAN = 'COMBAN';

    /** @var string Teléfono comercial */
    public const TCOBAN = 'TCOBAN';

    /** @var string Entidad */
    public const ENTBAN = 'ENTBAN';

    /** @var string Oficina */
    public const OFIBAN = 'OFIBAN';

    /** @var string Dígitos de control */
    public const DCOBAN = 'DCOBAN';

    /** @var string Nº de cuenta */
    public const CUEBAN = 'CUEBAN';

    /** @var string [L=#0;Cuenta corriente#1;Póliza de crédito#2;Imposición a plazo fijo]Tipo de cuenta */
    public const TCUBAN = 'TCUBAN';

    /** @var string Vencimiento de la póliza de crédito */
    public const VE1BAN = 'VE1BAN';

    /** @var string Límite de la póliza de crédito */
    public const LIMBAN = 'LIMBAN';

    /** @var string Importe del plazo fijo */
    public const IMPBAN = 'IMPBAN';

    /** @var string Vencimiento del plazo fijo */
    public const VE2BAN = 'VE2BAN';

    /** @var string Interés */
    public const IN1BAN = 'IN1BAN';

    /** @var string Interés sobre descubiertos */
    public const IN2BAN = 'IN2BAN';

    /** @var string Fecha de alta */
    public const FALBAN = 'FALBAN';

    /** @var string Cuenta contable */
    public const CCOBAN = 'CCOBAN';

    /** @var string Cód. Plaza INE */
    public const INEBAN = 'INEBAN';

    /** @var string Cuaderno 19. CIF Presentador. */
    public const CP19BAN = 'CP19BAN';

    /** @var string Cuaderno 19. Nombre Presentador. */
    public const NP19BAN = 'NP19BAN';

    /** @var string Cuaderno 19. Sufijo Presentador. */
    public const SP19BAN = 'SP19BAN';

    /** @var string Cuaderno 19. CIF Ordenante. */
    public const CO19BAN = 'CO19BAN';

    /** @var string Cuaderno 19. Nombre Ordenante. */
    public const NO19BAN = 'NO19BAN';

    /** @var string Cuaderno 19. Sufijo Ordenante. */
    public const SO19BAN = 'SO19BAN';

    /** @var string Cuaderno 58. CIF Presentador. */
    public const CP58BAN = 'CP58BAN';

    /** @var string Cuaderno 58. Nombre Presentador. */
    public const NP58BAN = 'NP58BAN';

    /** @var string Cuaderno 58. Sufijo Presentador. */
    public const SP58BAN = 'SP58BAN';

    /** @var string Cuaderno 58. CIF Ordenante. */
    public const CO58BAN = 'CO58BAN';

    /** @var string Cuaderno 58. Nombre Ordenante. */
    public const NO58BAN = 'NO58BAN';

    /** @var string Cuaderno 58. Sufijo Ordenante. */
    public const SO58BAN = 'SO58BAN';

    /** @var string Transferencias. Código Ordenante. */
    public const CO34BAN = 'CO34BAN';

    /** @var string Transferencias. Nombre Ordenante. */
    public const NO34BAN = 'NO34BAN';

    /** @var string Transferencias. Domicilio Ordenante. */
    public const DO34BAN = 'DO34BAN';

    /** @var string Transferencias. Nombre Ordenante. */
    public const PL34BAN = 'PL34BAN';

    /** @var string Código IBAN */
    public const IBABAN = 'IBABAN';

    /** @var string Código BIC */
    public const BICBAN = 'BICBAN';

    /** @var string Sufijo transferencias */
    public const RE34BAN = 'RE34BAN';

    /** @var string Incluir en factura electronica */
    public const BTRBAN = 'BTRBAN';
}
