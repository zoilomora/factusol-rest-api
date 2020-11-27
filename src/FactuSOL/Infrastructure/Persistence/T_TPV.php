<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Persistence;

final class T_TPV
{
    public const TABLE_NAME = 'T_TPV';

    /** @var string Código del punto de venta */
    public const CODTPV = 'T_TPV.CODTPV';

    /** @var string Descripción del punto de venta */
    public const DESTPV = 'T_TPV.DESTPV';

    /** @var string Código del cliente por defecto */
    public const CLITPV = 'T_TPV.CLITPV';

    /** @var string Forma de pago por defecto */
    public const FPATPV = 'T_TPV.FPATPV';

    /** @var string Almacén por defecto */
    public const ALMTPV = 'T_TPV.ALMTPV';

    /** @var string Mostrar texto cuando no haya ningún ticket activo */
    public const TLITPV = 'T_TPV.TLITPV';

    /** @var string Primera linea del texto */
    public const PLITPV = 'T_TPV.PLITPV';

    /** @var string Segunda linea del texto */
    public const SLITPV = 'T_TPV.SLITPV';

    /** @var string Tickets - Tipo de impresión para la cabecera 1 */
    public const CTI1TPV = 'T_TPV.CTI1TPV';

    /** @var string Tickets - Tipo de letra para la cabecera 1 */
    public const CTL1TPV = 'T_TPV.CTL1TPV';

    /** @var string Tickets - Texto para la cabecera 1 */
    public const CTT1TPV = 'T_TPV.CTT1TPV';

    /** @var string Tickets - Tipo de impresión para la cabecera 2 */
    public const CTI2TPV = 'T_TPV.CTI2TPV';

    /** @var string Tickets - Tipo de letra para la cabecera 2 */
    public const CTL2TPV = 'T_TPV.CTL2TPV';

    /** @var string Tickets - Texto para la cabecera 2 */
    public const CTT2TPV = 'T_TPV.CTT2TPV';

    /** @var string Tickets - Tipo de impresión para la cabecera 3 */
    public const CTI3TPV = 'T_TPV.CTI3TPV';

    /** @var string Tickets - Tipo de letra para la cabecera 3 */
    public const CTL3TPV = 'T_TPV.CTL3TPV';

    /** @var string Tickets - Texto para la cabecera 3 */
    public const CTT3TPV = 'T_TPV.CTT3TPV';

    /** @var string Tickets - Tipo de impresión para la cabecera 4 */
    public const CTI4TPV = 'T_TPV.CTI4TPV';

    /** @var string Tickets - Tipo de letra para la cabecera 4 */
    public const CTL4TPV = 'T_TPV.CTL4TPV';

    /** @var string Tickets - Texto para la cabecera 4 */
    public const CTT4TPV = 'T_TPV.CTT4TPV';

    /** @var string Tickets - Tipo de impresión para la cabecera 5 */
    public const CTI5TPV = 'T_TPV.CTI5TPV';

    /** @var string Tickets - Tipo de letra para la cabecera 5 */
    public const CTL5TPV = 'T_TPV.CTL5TPV';

    /** @var string Tickets - Texto para la cabecera 5 */
    public const CTT5TPV = 'T_TPV.CTT5TPV';

    /** @var string Tickets - Logotipo para la cabecera */
    public const LOGTPV = 'T_TPV.LOGTPV';

    /** @var string Tickets - Ancho del logotipo */
    public const ANGTPV = 'T_TPV.ANGTPV';

    /** @var string Tickets - Alto del logotipo */
    public const ALGTPV = 'T_TPV.ALGTPV';

    /** @var string Tickets - Eje X para el logotipo */
    public const PXGTPV = 'T_TPV.PXGTPV';

    /** @var string Tickets - Eje Y para el logotipo */
    public const PYGTPV = 'T_TPV.PYGTPV';

    /** @var string Tickets - Imprimir cabecera del cliente */
    public const ICCTPV = 'T_TPV.ICCTPV';

    /** @var string Tickets - Tipo de impresión para el pie 1 */
    public const PTI1TPV = 'T_TPV.PTI1TPV';

    /** @var string Tickets - Tipo de letra para el pie 1 */
    public const PTL1TPV = 'T_TPV.PTL1TPV';

    /** @var string Tickets - Texto para el pie 1 */
    public const PTT1TPV = 'T_TPV.PTT1TPV';

    /** @var string Tickets - Tipo de impresión para el pie 2 */
    public const PTI2TPV = 'T_TPV.PTI2TPV';

    /** @var string Tickets - Tipo de letra para el pie 2 */
    public const PTL2TPV = 'T_TPV.PTL2TPV';

    /** @var string Tickets - Texto para el pie 2 */
    public const PTT2TPV = 'T_TPV.PTT2TPV';

    /** @var string Tickets - Tipo de impresión para el pie 3 */
    public const PTI3TPV = 'T_TPV.PTI3TPV';

    /** @var string Tickets - Tipo de letra para el pie 3 */
    public const PTL3TPV = 'T_TPV.PTL3TPV';

    /** @var string Tickets - Texto para el pie 3 */
    public const PTT3TPV = 'T_TPV.PTT3TPV';

    /** @var string Tickets - Tipo de impresión para el pie 4 */
    public const PTI4TPV = 'T_TPV.PTI4TPV';

    /** @var string Tickets - Tipo de letra para el pie 4 */
    public const PTL4TPV = 'T_TPV.PTL4TPV';

    /** @var string Tickets - Texto para el pie 4 */
    public const PTT4TPV = 'T_TPV.PTT4TPV';

    /** @var string Tickets - Tipo de impresión para el pie 5 */
    public const PTI5TPV = 'T_TPV.PTI5TPV';

    /** @var string Tickets - Tipo de letra para el pie 5 */
    public const PTL5TPV = 'T_TPV.PTL5TPV';

    /** @var string Tickets - Texto para el pie 5 */
    public const PTT5TPV = 'T_TPV.PTT5TPV';

    /** @var string Tickets - Tipo de impresión para el pie 6 */
    public const PTI6TPV = 'T_TPV.PTI6TPV';

    /** @var string Tickets - Tipo de letra para el pie 6 */
    public const PTL6TPV = 'T_TPV.PTL6TPV';

    /** @var string Tickets - Texto para el pie 6 */
    public const PTT6TPV = 'T_TPV.PTT6TPV';

    /** @var string Tickets - Tipo de impresión para el pie 7 */
    public const PTI7TPV = 'T_TPV.PTI7TPV';

    /** @var string Tickets - Tipo de letra para el pie 7 */
    public const PTL7TPV = 'T_TPV.PTL7TPV';

    /** @var string Tickets - Texto para el pie 7 */
    public const PTT7TPV = 'T_TPV.PTT7TPV';

    /** @var string Tickets - Tipo de impresión para el pie 8 */
    public const PTI8TPV = 'T_TPV.PTI8TPV';

    /** @var string Tickets - Tipo de letra para el pie 8 */
    public const PTL8TPV = 'T_TPV.PTL8TPV';

    /** @var string Tickets - Texto para el pie 8 */
    public const PTT8TPV = 'T_TPV.PTT8TPV';

    /** @var string Tickets - Tipo de impresión para el pie 9 */
    public const PTI9TPV = 'T_TPV.PTI9TPV';

    /** @var string Tickets - Tipo de letra para el pie 9 */
    public const PTL9TPV = 'T_TPV.PTL9TPV';

    /** @var string Tickets - Texto para el pie 9 */
    public const PTT9TPV = 'T_TPV.PTT9TPV';

    /** @var string Tickets - Tipo de impresión para el pie 10 */
    public const PTI10TPV = 'T_TPV.PTI10TPV';

    /** @var string Tickets - Tipo de letra para el pie 10 */
    public const PTL10TPV = 'T_TPV.PTL10TPV';

    /** @var string Tickets - Texto para el pie 10 */
    public const PTT10TPV = 'T_TPV.PTT10TPV';

    /** @var string Vales - Tipo de impresión para la cabecera 1 */
    public const CTIV1TPV = 'T_TPV.CTIV1TPV';

    /** @var string Vales - Texto de impresión para la cabecera 1 */
    public const CTTV1TPV = 'T_TPV.CTTV1TPV';

    /** @var string Vales - Tipo de impresión para la cabecera 2 */
    public const CTIV2TPV = 'T_TPV.CTIV2TPV';

    /** @var string Vales - Texto de impresión para la cabecera 2 */
    public const CTTV2TPV = 'T_TPV.CTTV2TPV';

    /** @var string Vales - Tipo de impresión para la cabecera 3 */
    public const CTIV3TPV = 'T_TPV.CTIV3TPV';

    /** @var string Vales - Texto de impresión para la cabecera 3 */
    public const CTTV3TPV = 'T_TPV.CTTV3TPV';

    /** @var string Vales - Tipo de impresión para la cabecera 4 */
    public const CTIV4TPV = 'T_TPV.CTIV4TPV';

    /** @var string Vales - Texto de impresión para la cabecera 4 */
    public const CTTV4TPV = 'T_TPV.CTTV4TPV';

    /** @var string Vales - Tipo de impresión para la cabecera 5 */
    public const CTIV5TPV = 'T_TPV.CTIV5TPV';

    /** @var string Vales - Texto de impresión para la cabecera 5 */
    public const CTTV5TPV = 'T_TPV.CTTV5TPV';

    /** @var string Vales - Tipo de impresión para el pie 1 */
    public const PTIV1TPV = 'T_TPV.PTIV1TPV';

    /** @var string Vales - Texto de impresión para el pie 1 */
    public const PTTV1TPV = 'T_TPV.PTTV1TPV';

    /** @var string Vales - Tipo de impresión para el pie 2 */
    public const PTIV2TPV = 'T_TPV.PTIV2TPV';

    /** @var string Vales - Texto de impresión para el pie 2 */
    public const PTTV2TPV = 'T_TPV.PTTV2TPV';

    /** @var string Vales - Tipo de impresión para el pie 3 */
    public const PTIV3TPV = 'T_TPV.PTIV3TPV';

    /** @var string Vales - Texto de impresión para el pie 3 */
    public const PTTV3TPV = 'T_TPV.PTTV3TPV';

    /** @var string Vales - Tipo de impresión para el pie 4 */
    public const PTIV4TPV = 'T_TPV.PTIV4TPV';

    /** @var string Vales - Texto de impresión para el pie 4 */
    public const PTTV4TPV = 'T_TPV.PTTV4TPV';

    public const IEVTPV = 'T_TPV.IEVTPV';

    public const TRDTPV = 'T_TPV.TRDTPV';

    public const ITRTPV = 'T_TPV.ITRTPV';
}
