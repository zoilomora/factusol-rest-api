<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Persistence;

final class F_SMS
{
    public const TABLE_NAME = 'F_SMS';

    /** @var string Código */
    public const CODSMS = 'CODSMS';

    /** @var string Fecha */
    public const FECSMS = 'FECSMS';

    /** @var string [F=hh:mm]Hora */
    public const HORSMS = 'HORSMS';

    /** @var string Texto */
    public const CONSMS = 'CONSMS';

    /** @var string Destinatarios */
    public const DESSMS = 'DESSMS';

    /** @var string Código usuario que envió el SMS */
    public const USUSMS = 'USUSMS';

    /** @var string [E]SOLICITO ACUSO DE RECIBO 0= NO, 1 = SI */
    public const ACUSMS = 'ACUSMS';

    /** @var string [E]REMITENTE PERSONALIZADO PARA EL ENVÍO 0=NO, 1 = SI */
    public const REMSMS = 'REMSMS';

    /** @var string [E]FECHA PROGRAMADA PARA EL ENVÍO */
    public const FPESMS = 'FPESMS';

    /** @var string [E]HORA PROGRAMADA PARA EL ENVÍO */
    public const HPESMS = 'HPESMS';

    /** @var string Asunto del MMS */
    public const ASUSMS = 'ASUSMS';

    /** @var string [E]FICHERO ADJUNTO AL MMS */
    public const FICSMS = 'FICSMS';

    /** @var string [E]ESTADO DEL ENVÍO */
    public const ESTSMS = 'ESTSMS';

    /** @var string [E] */
    public const PARSMS = 'PARSMS';

    /** @var string [E]TIPO DE DESTINATARIO DEL SMS, 0=MANUAL, 1 = CLIENTE, 2 = PROVEEDOR, 3 = AGENTE, 4 = CONTACTO */
    public const TDESMS = 'TDESMS';

    /** @var string Codigo SMS en la plataforma */
    public const CIDSMS = 'CIDSMS';

    public const RPESMS = 'RPESMS';
}
