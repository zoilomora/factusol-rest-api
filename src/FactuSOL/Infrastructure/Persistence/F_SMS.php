<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Persistence;

final class F_SMS
{
    public const TABLE_NAME = 'F_SMS';

    /** @var string Código */
    public const CODSMS = 'F_SMS.CODSMS';

    /** @var string Fecha */
    public const FECSMS = 'F_SMS.FECSMS';

    /** @var string [F=hh:mm]Hora */
    public const HORSMS = 'F_SMS.HORSMS';

    /** @var string Texto */
    public const CONSMS = 'F_SMS.CONSMS';

    /** @var string Destinatarios */
    public const DESSMS = 'F_SMS.DESSMS';

    /** @var string Código usuario que envió el SMS */
    public const USUSMS = 'F_SMS.USUSMS';

    /** @var string [E]SOLICITO ACUSO DE RECIBO 0= NO, 1 = SI */
    public const ACUSMS = 'F_SMS.ACUSMS';

    /** @var string [E]REMITENTE PERSONALIZADO PARA EL ENVÍO 0=NO, 1 = SI */
    public const REMSMS = 'F_SMS.REMSMS';

    /** @var string [E]FECHA PROGRAMADA PARA EL ENVÍO */
    public const FPESMS = 'F_SMS.FPESMS';

    /** @var string [E]HORA PROGRAMADA PARA EL ENVÍO */
    public const HPESMS = 'F_SMS.HPESMS';

    /** @var string Asunto del MMS */
    public const ASUSMS = 'F_SMS.ASUSMS';

    /** @var string [E]FICHERO ADJUNTO AL MMS */
    public const FICSMS = 'F_SMS.FICSMS';

    /** @var string [E]ESTADO DEL ENVÍO */
    public const ESTSMS = 'F_SMS.ESTSMS';

    /** @var string [E] */
    public const PARSMS = 'F_SMS.PARSMS';

    /** @var string [E]TIPO DE DESTINATARIO DEL SMS, 0=MANUAL, 1 = CLIENTE, 2 = PROVEEDOR, 3 = AGENTE, 4 = CONTACTO */
    public const TDESMS = 'F_SMS.TDESMS';

    /** @var string Codigo SMS en la plataforma */
    public const CIDSMS = 'F_SMS.CIDSMS';

    public const RPESMS = 'F_SMS.RPESMS';
}
