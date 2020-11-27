<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Persistence;

final class F_BAN
{
    public const TABLE_NAME = 'F_BAN';

    /** @var string Código */
    public const CODBAN = 'F_BAN.CODBAN';

    /** @var string Nombre */
    public const NOMBAN = 'F_BAN.NOMBAN';

    /** @var string Domicilio */
    public const DOMBAN = 'F_BAN.DOMBAN';

    /** @var string Población */
    public const POBBAN = 'F_BAN.POBBAN';

    /** @var string Cód. Postal */
    public const CPOBAN = 'F_BAN.CPOBAN';

    /** @var string Provincia */
    public const PROBAN = 'F_BAN.PROBAN';

    /** @var string Teléfono */
    public const TELBAN = 'F_BAN.TELBAN';

    /** @var string Fax */
    public const FAXBAN = 'F_BAN.FAXBAN';

    /** @var string Director */
    public const DIRBAN = 'F_BAN.DIRBAN';

    /** @var string Teléfono director */
    public const TDIBAN = 'F_BAN.TDIBAN';

    /** @var string Interventor */
    public const INTBAN = 'F_BAN.INTBAN';

    /** @var string Teléfono interventor */
    public const TINBAN = 'F_BAN.TINBAN';

    /** @var string Comercial */
    public const COMBAN = 'F_BAN.COMBAN';

    /** @var string Teléfono comercial */
    public const TCOBAN = 'F_BAN.TCOBAN';

    /** @var string Entidad */
    public const ENTBAN = 'F_BAN.ENTBAN';

    /** @var string Oficina */
    public const OFIBAN = 'F_BAN.OFIBAN';

    /** @var string Dígitos de control */
    public const DCOBAN = 'F_BAN.DCOBAN';

    /** @var string Nº de cuenta */
    public const CUEBAN = 'F_BAN.CUEBAN';

    /** @var string [L=#0;Cuenta corriente#1;Póliza de crédito#2;Imposición a plazo fijo]Tipo de cuenta */
    public const TCUBAN = 'F_BAN.TCUBAN';

    /** @var string Vencimiento de la póliza de crédito */
    public const VE1BAN = 'F_BAN.VE1BAN';

    /** @var string Límite de la póliza de crédito */
    public const LIMBAN = 'F_BAN.LIMBAN';

    /** @var string Importe del plazo fijo */
    public const IMPBAN = 'F_BAN.IMPBAN';

    /** @var string Vencimiento del plazo fijo */
    public const VE2BAN = 'F_BAN.VE2BAN';

    /** @var string Interés */
    public const IN1BAN = 'F_BAN.IN1BAN';

    /** @var string Interés sobre descubiertos */
    public const IN2BAN = 'F_BAN.IN2BAN';

    /** @var string Fecha de alta */
    public const FALBAN = 'F_BAN.FALBAN';

    /** @var string Cuenta contable */
    public const CCOBAN = 'F_BAN.CCOBAN';

    /** @var string Cód. Plaza INE */
    public const INEBAN = 'F_BAN.INEBAN';

    /** @var string Cuaderno 19. CIF Presentador. */
    public const CP19BAN = 'F_BAN.CP19BAN';

    /** @var string Cuaderno 19. Nombre Presentador. */
    public const NP19BAN = 'F_BAN.NP19BAN';

    /** @var string Cuaderno 19. Sufijo Presentador. */
    public const SP19BAN = 'F_BAN.SP19BAN';

    /** @var string Cuaderno 19. CIF Ordenante. */
    public const CO19BAN = 'F_BAN.CO19BAN';

    /** @var string Cuaderno 19. Nombre Ordenante. */
    public const NO19BAN = 'F_BAN.NO19BAN';

    /** @var string Cuaderno 19. Sufijo Ordenante. */
    public const SO19BAN = 'F_BAN.SO19BAN';

    /** @var string Cuaderno 58. CIF Presentador. */
    public const CP58BAN = 'F_BAN.CP58BAN';

    /** @var string Cuaderno 58. Nombre Presentador. */
    public const NP58BAN = 'F_BAN.NP58BAN';

    /** @var string Cuaderno 58. Sufijo Presentador. */
    public const SP58BAN = 'F_BAN.SP58BAN';

    /** @var string Cuaderno 58. CIF Ordenante. */
    public const CO58BAN = 'F_BAN.CO58BAN';

    /** @var string Cuaderno 58. Nombre Ordenante. */
    public const NO58BAN = 'F_BAN.NO58BAN';

    /** @var string Cuaderno 58. Sufijo Ordenante. */
    public const SO58BAN = 'F_BAN.SO58BAN';

    /** @var string Transferencias. Código Ordenante. */
    public const CO34BAN = 'F_BAN.CO34BAN';

    /** @var string Transferencias. Nombre Ordenante. */
    public const NO34BAN = 'F_BAN.NO34BAN';

    /** @var string Transferencias. Domicilio Ordenante. */
    public const DO34BAN = 'F_BAN.DO34BAN';

    /** @var string Transferencias. Nombre Ordenante. */
    public const PL34BAN = 'F_BAN.PL34BAN';

    /** @var string Código IBAN */
    public const IBABAN = 'F_BAN.IBABAN';

    /** @var string Código BIC */
    public const BICBAN = 'F_BAN.BICBAN';

    /** @var string Sufijo transferencias */
    public const RE34BAN = 'F_BAN.RE34BAN';

    /** @var string Incluir en factura electronica */
    public const BTRBAN = 'F_BAN.BTRBAN';
}
