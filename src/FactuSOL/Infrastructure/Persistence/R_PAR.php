<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Persistence;

final class R_PAR
{
    public const TABLE_NAME = 'R_PAR';

    /** @var string Código */
    public const CODPAR = 'CODPAR';

    /** @var string Fecha de entrada */
    public const FENPAR = 'FENPAR';

    /** @var string [L=#0;Tipo 1#1;Tipo 2#2;Tipo 3#3;Tipo 4#4;Tipo 5#5;Tipo 6#6;Tipo 7#7;Tipo 8#8;Tipo 9]Tipo de parte */
    public const TIPPAR = 'TIPPAR';

    /** @var string [L=#0;Estado 1#1;Estado 2#2;Estado 3#3;Estado 4#4;Estado 5#5;Estado 6#6;Estado 7#7;Estado 8#8;Estado 9]Estado */
    public const ESTPAR = 'ESTPAR';

    /** @var string [F=00000]Cliente */
    public const CLIPAR = 'CLIPAR';

    /** @var string Persona de contacto */
    public const PCOPAR = 'PCOPAR';

    /** @var string Teléfono */
    public const TELPAR = 'TELPAR';

    /** @var string Observaciones */
    public const OBSPAR = 'OBSPAR';

    /** @var string Zona */
    public const ZONPAR = 'ZONPAR';

    /** @var string Fecha prevista visita */
    public const FPVPAR = 'FPVPAR';

    /** @var string Hora prevista visita */
    public const HPVPAR = 'HPVPAR';

    /** @var string Técnico */
    public const TECPAR = 'TECPAR';

    /** @var string Producto */
    public const TAPPAR = 'TAPPAR';

    /** @var string Marca */
    public const MARPAR = 'MARPAR';

    /** @var string Modelo */
    public const MODPAR = 'MODPAR';

    /** @var string Nº de serie */
    public const NSEPAR = 'NSEPAR';

    /** @var string Fecha de compra */
    public const FCOPAR = 'FCOPAR';

    /** @var string Fecha fin de garantía */
    public const FFGPAR = 'FFGPAR';

    /** @var string Síntoma de la avería */
    public const AVEPAR = 'AVEPAR';

    /** @var string [L=#0;No#1;Sí]Solicita presupuesto previo */
    public const PREPAR = 'PREPAR';

    /** @var string [L=#0;No#1;Sí]Reparación en garantía */
    public const GARPAR = 'GARPAR';

    /** @var string Tipo de intervención */
    public const TINPAR = 'TINPAR';

    /** @var string Nº de póliza */
    public const NPOPAR = 'NPOPAR';

    /** @var string Trabajo realizado */
    public const TRAPAR = 'TRAPAR';

    /** @var string [L=#0;No#1;Sí]Reparado en taller */
    public const REPPAR = 'REPPAR';

    /** @var string [L=#0;No#1;Sí]Intervención terminada */
    public const INTPAR = 'INTPAR';

    /** @var string Presupuesto. Piezas */
    public const PIEPAR = 'PIEPAR';

    /** @var string Presupuesto. Mano de obra */
    public const MOBPAR = 'MOBPAR';

    /** @var string Presupuesto. Total */
    public const TPRPAR = 'TPRPAR';

    /** @var string Nº horas de trabajo */
    public const NHOPAR = 'NHOPAR';

    /** @var string Trabajo, desde */
    public const DESPAR = 'DESPAR';

    /** @var string Trabajo, hasta */
    public const HASPAR = 'HASPAR';

    /** @var string Importe piezas */
    public const TPIPAR = 'TPIPAR';

    /** @var string Importemano de obra */
    public const MAOPAR = 'MAOPAR';

    /** @var string Importe disposición de servicio */
    public const DISPAR = 'DISPAR';

    /** @var string Importe transporte / almacenaje */
    public const TALPAR = 'TALPAR';

    /** @var string Base imponible */
    public const BASPAR = 'BASPAR';

    /** @var string Porcentaje de IVA */
    public const PIVPAR = 'PIVPAR';

    /** @var string Importe de IVA */
    public const IIVPAR = 'IIVPAR';

    /** @var string Total parte */
    public const TOTPAR = 'TOTPAR';

    /** @var string Fecha de salida */
    public const FSAPAR = 'FSAPAR';

    /** @var string [L=#0;No#1;Sí]Facturado */
    public const FACPAR = 'FACPAR';

    /** @var string NIF */
    public const CNIPAR = 'CNIPAR';

    /** @var string Nombre */
    public const CNOPAR = 'CNOPAR';

    /** @var string Domicilio */
    public const CDOPAR = 'CDOPAR';

    /** @var string Código postal */
    public const CCPPAR = 'CCPPAR';

    /** @var string Población */
    public const CPOPAR = 'CPOPAR';

    /** @var string Provincia */
    public const CPRPAR = 'CPRPAR';

    /** @var string Fax */
    public const FAXPAR = 'FAXPAR';

    /** @var string E-mail */
    public const EMAPAR = 'EMAPAR';

    /** @var string Porcentaje de recargo */
    public const PRECPAR = 'PRECPAR';

    /** @var string Importe de recargo */
    public const IRECPAR = 'IRECPAR';

    /** @var string Documento en que se facturó o albaraneó el parte */
    public const DOCPAR = 'DOCPAR';

    /** @var string Dirección de entrega */
    public const OBRPAR = 'OBRPAR';
}
