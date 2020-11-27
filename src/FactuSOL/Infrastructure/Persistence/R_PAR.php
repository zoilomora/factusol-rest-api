<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Persistence;

final class R_PAR
{
    public const TABLE_NAME = 'R_PAR';

    /** @var string Código */
    public const CODPAR = 'R_PAR.CODPAR';

    /** @var string Fecha de entrada */
    public const FENPAR = 'R_PAR.FENPAR';

    /** @var string [L=#0;Tipo 1#1;Tipo 2#2;Tipo 3#3;Tipo 4#4;Tipo 5#5;Tipo 6#6;Tipo 7#7;Tipo 8#8;Tipo 9]Tipo de parte */
    public const TIPPAR = 'R_PAR.TIPPAR';

    /** @var string [L=#0;Estado 1#1;Estado 2#2;Estado 3#3;Estado 4#4;Estado 5#5;Estado 6#6;Estado 7#7;Estado 8#8;Estado 9]Estado */
    public const ESTPAR = 'R_PAR.ESTPAR';

    /** @var string [F=00000]Cliente */
    public const CLIPAR = 'R_PAR.CLIPAR';

    /** @var string Persona de contacto */
    public const PCOPAR = 'R_PAR.PCOPAR';

    /** @var string Teléfono */
    public const TELPAR = 'R_PAR.TELPAR';

    /** @var string Observaciones */
    public const OBSPAR = 'R_PAR.OBSPAR';

    /** @var string Zona */
    public const ZONPAR = 'R_PAR.ZONPAR';

    /** @var string Fecha prevista visita */
    public const FPVPAR = 'R_PAR.FPVPAR';

    /** @var string Hora prevista visita */
    public const HPVPAR = 'R_PAR.HPVPAR';

    /** @var string Técnico */
    public const TECPAR = 'R_PAR.TECPAR';

    /** @var string Producto */
    public const TAPPAR = 'R_PAR.TAPPAR';

    /** @var string Marca */
    public const MARPAR = 'R_PAR.MARPAR';

    /** @var string Modelo */
    public const MODPAR = 'R_PAR.MODPAR';

    /** @var string Nº de serie */
    public const NSEPAR = 'R_PAR.NSEPAR';

    /** @var string Fecha de compra */
    public const FCOPAR = 'R_PAR.FCOPAR';

    /** @var string Fecha fin de garantía */
    public const FFGPAR = 'R_PAR.FFGPAR';

    /** @var string Síntoma de la avería */
    public const AVEPAR = 'R_PAR.AVEPAR';

    /** @var string [L=#0;No#1;Sí]Solicita presupuesto previo */
    public const PREPAR = 'R_PAR.PREPAR';

    /** @var string [L=#0;No#1;Sí]Reparación en garantía */
    public const GARPAR = 'R_PAR.GARPAR';

    /** @var string Tipo de intervención */
    public const TINPAR = 'R_PAR.TINPAR';

    /** @var string Nº de póliza */
    public const NPOPAR = 'R_PAR.NPOPAR';

    /** @var string Trabajo realizado */
    public const TRAPAR = 'R_PAR.TRAPAR';

    /** @var string [L=#0;No#1;Sí]Reparado en taller */
    public const REPPAR = 'R_PAR.REPPAR';

    /** @var string [L=#0;No#1;Sí]Intervención terminada */
    public const INTPAR = 'R_PAR.INTPAR';

    /** @var string Presupuesto. Piezas */
    public const PIEPAR = 'R_PAR.PIEPAR';

    /** @var string Presupuesto. Mano de obra */
    public const MOBPAR = 'R_PAR.MOBPAR';

    /** @var string Presupuesto. Total */
    public const TPRPAR = 'R_PAR.TPRPAR';

    /** @var string Nº horas de trabajo */
    public const NHOPAR = 'R_PAR.NHOPAR';

    /** @var string Trabajo, desde */
    public const DESPAR = 'R_PAR.DESPAR';

    /** @var string Trabajo, hasta */
    public const HASPAR = 'R_PAR.HASPAR';

    /** @var string Importe piezas */
    public const TPIPAR = 'R_PAR.TPIPAR';

    /** @var string Importemano de obra */
    public const MAOPAR = 'R_PAR.MAOPAR';

    /** @var string Importe disposición de servicio */
    public const DISPAR = 'R_PAR.DISPAR';

    /** @var string Importe transporte / almacenaje */
    public const TALPAR = 'R_PAR.TALPAR';

    /** @var string Base imponible */
    public const BASPAR = 'R_PAR.BASPAR';

    /** @var string Porcentaje de IVA */
    public const PIVPAR = 'R_PAR.PIVPAR';

    /** @var string Importe de IVA */
    public const IIVPAR = 'R_PAR.IIVPAR';

    /** @var string Total parte */
    public const TOTPAR = 'R_PAR.TOTPAR';

    /** @var string Fecha de salida */
    public const FSAPAR = 'R_PAR.FSAPAR';

    /** @var string [L=#0;No#1;Sí]Facturado */
    public const FACPAR = 'R_PAR.FACPAR';

    /** @var string NIF */
    public const CNIPAR = 'R_PAR.CNIPAR';

    /** @var string Nombre */
    public const CNOPAR = 'R_PAR.CNOPAR';

    /** @var string Domicilio */
    public const CDOPAR = 'R_PAR.CDOPAR';

    /** @var string Código postal */
    public const CCPPAR = 'R_PAR.CCPPAR';

    /** @var string Población */
    public const CPOPAR = 'R_PAR.CPOPAR';

    /** @var string Provincia */
    public const CPRPAR = 'R_PAR.CPRPAR';

    /** @var string Fax */
    public const FAXPAR = 'R_PAR.FAXPAR';

    /** @var string E-mail */
    public const EMAPAR = 'R_PAR.EMAPAR';

    /** @var string Porcentaje de recargo */
    public const PRECPAR = 'R_PAR.PRECPAR';

    /** @var string Importe de recargo */
    public const IRECPAR = 'R_PAR.IRECPAR';

    /** @var string Documento en que se facturó o albaraneó el parte */
    public const DOCPAR = 'R_PAR.DOCPAR';

    /** @var string Dirección de entrega */
    public const OBRPAR = 'R_PAR.OBRPAR';
}
