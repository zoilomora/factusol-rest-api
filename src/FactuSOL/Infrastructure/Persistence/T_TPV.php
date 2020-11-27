<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Persistence;

final class T_TPV
{
    public const TABLE_NAME = 'T_TPV';

    /** @var string Código del punto de venta */
    public const CODTPV = 'CODTPV';

    /** @var string Descripción del punto de venta */
    public const DESTPV = 'DESTPV';

    /** @var string Código del cliente por defecto */
    public const CLITPV = 'CLITPV';

    /** @var string Forma de pago por defecto */
    public const FPATPV = 'FPATPV';

    /** @var string Almacén por defecto */
    public const ALMTPV = 'ALMTPV';

    /** @var string Mostrar texto cuando no haya ningún ticket activo */
    public const TLITPV = 'TLITPV';

    /** @var string Primera linea del texto */
    public const PLITPV = 'PLITPV';

    /** @var string Segunda linea del texto */
    public const SLITPV = 'SLITPV';

    /** @var string Tickets - Tipo de impresión para la cabecera 1 */
    public const CTI1TPV = 'CTI1TPV';

    /** @var string Tickets - Tipo de letra para la cabecera 1 */
    public const CTL1TPV = 'CTL1TPV';

    /** @var string Tickets - Texto para la cabecera 1 */
    public const CTT1TPV = 'CTT1TPV';

    /** @var string Tickets - Tipo de impresión para la cabecera 2 */
    public const CTI2TPV = 'CTI2TPV';

    /** @var string Tickets - Tipo de letra para la cabecera 2 */
    public const CTL2TPV = 'CTL2TPV';

    /** @var string Tickets - Texto para la cabecera 2 */
    public const CTT2TPV = 'CTT2TPV';

    /** @var string Tickets - Tipo de impresión para la cabecera 3 */
    public const CTI3TPV = 'CTI3TPV';

    /** @var string Tickets - Tipo de letra para la cabecera 3 */
    public const CTL3TPV = 'CTL3TPV';

    /** @var string Tickets - Texto para la cabecera 3 */
    public const CTT3TPV = 'CTT3TPV';

    /** @var string Tickets - Tipo de impresión para la cabecera 4 */
    public const CTI4TPV = 'CTI4TPV';

    /** @var string Tickets - Tipo de letra para la cabecera 4 */
    public const CTL4TPV = 'CTL4TPV';

    /** @var string Tickets - Texto para la cabecera 4 */
    public const CTT4TPV = 'CTT4TPV';

    /** @var string Tickets - Tipo de impresión para la cabecera 5 */
    public const CTI5TPV = 'CTI5TPV';

    /** @var string Tickets - Tipo de letra para la cabecera 5 */
    public const CTL5TPV = 'CTL5TPV';

    /** @var string Tickets - Texto para la cabecera 5 */
    public const CTT5TPV = 'CTT5TPV';

    /** @var string Tickets - Logotipo para la cabecera */
    public const LOGTPV = 'LOGTPV';

    /** @var string Tickets - Ancho del logotipo */
    public const ANGTPV = 'ANGTPV';

    /** @var string Tickets - Alto del logotipo */
    public const ALGTPV = 'ALGTPV';

    /** @var string Tickets - Eje X para el logotipo */
    public const PXGTPV = 'PXGTPV';

    /** @var string Tickets - Eje Y para el logotipo */
    public const PYGTPV = 'PYGTPV';

    /** @var string Tickets - Imprimir cabecera del cliente */
    public const ICCTPV = 'ICCTPV';

    /** @var string Tickets - Tipo de impresión para el pie 1 */
    public const PTI1TPV = 'PTI1TPV';

    /** @var string Tickets - Tipo de letra para el pie 1 */
    public const PTL1TPV = 'PTL1TPV';

    /** @var string Tickets - Texto para el pie 1 */
    public const PTT1TPV = 'PTT1TPV';

    /** @var string Tickets - Tipo de impresión para el pie 2 */
    public const PTI2TPV = 'PTI2TPV';

    /** @var string Tickets - Tipo de letra para el pie 2 */
    public const PTL2TPV = 'PTL2TPV';

    /** @var string Tickets - Texto para el pie 2 */
    public const PTT2TPV = 'PTT2TPV';

    /** @var string Tickets - Tipo de impresión para el pie 3 */
    public const PTI3TPV = 'PTI3TPV';

    /** @var string Tickets - Tipo de letra para el pie 3 */
    public const PTL3TPV = 'PTL3TPV';

    /** @var string Tickets - Texto para el pie 3 */
    public const PTT3TPV = 'PTT3TPV';

    /** @var string Tickets - Tipo de impresión para el pie 4 */
    public const PTI4TPV = 'PTI4TPV';

    /** @var string Tickets - Tipo de letra para el pie 4 */
    public const PTL4TPV = 'PTL4TPV';

    /** @var string Tickets - Texto para el pie 4 */
    public const PTT4TPV = 'PTT4TPV';

    /** @var string Tickets - Tipo de impresión para el pie 5 */
    public const PTI5TPV = 'PTI5TPV';

    /** @var string Tickets - Tipo de letra para el pie 5 */
    public const PTL5TPV = 'PTL5TPV';

    /** @var string Tickets - Texto para el pie 5 */
    public const PTT5TPV = 'PTT5TPV';

    /** @var string Tickets - Tipo de impresión para el pie 6 */
    public const PTI6TPV = 'PTI6TPV';

    /** @var string Tickets - Tipo de letra para el pie 6 */
    public const PTL6TPV = 'PTL6TPV';

    /** @var string Tickets - Texto para el pie 6 */
    public const PTT6TPV = 'PTT6TPV';

    /** @var string Tickets - Tipo de impresión para el pie 7 */
    public const PTI7TPV = 'PTI7TPV';

    /** @var string Tickets - Tipo de letra para el pie 7 */
    public const PTL7TPV = 'PTL7TPV';

    /** @var string Tickets - Texto para el pie 7 */
    public const PTT7TPV = 'PTT7TPV';

    /** @var string Tickets - Tipo de impresión para el pie 8 */
    public const PTI8TPV = 'PTI8TPV';

    /** @var string Tickets - Tipo de letra para el pie 8 */
    public const PTL8TPV = 'PTL8TPV';

    /** @var string Tickets - Texto para el pie 8 */
    public const PTT8TPV = 'PTT8TPV';

    /** @var string Tickets - Tipo de impresión para el pie 9 */
    public const PTI9TPV = 'PTI9TPV';

    /** @var string Tickets - Tipo de letra para el pie 9 */
    public const PTL9TPV = 'PTL9TPV';

    /** @var string Tickets - Texto para el pie 9 */
    public const PTT9TPV = 'PTT9TPV';

    /** @var string Tickets - Tipo de impresión para el pie 10 */
    public const PTI10TPV = 'PTI10TPV';

    /** @var string Tickets - Tipo de letra para el pie 10 */
    public const PTL10TPV = 'PTL10TPV';

    /** @var string Tickets - Texto para el pie 10 */
    public const PTT10TPV = 'PTT10TPV';

    /** @var string Vales - Tipo de impresión para la cabecera 1 */
    public const CTIV1TPV = 'CTIV1TPV';

    /** @var string Vales - Texto de impresión para la cabecera 1 */
    public const CTTV1TPV = 'CTTV1TPV';

    /** @var string Vales - Tipo de impresión para la cabecera 2 */
    public const CTIV2TPV = 'CTIV2TPV';

    /** @var string Vales - Texto de impresión para la cabecera 2 */
    public const CTTV2TPV = 'CTTV2TPV';

    /** @var string Vales - Tipo de impresión para la cabecera 3 */
    public const CTIV3TPV = 'CTIV3TPV';

    /** @var string Vales - Texto de impresión para la cabecera 3 */
    public const CTTV3TPV = 'CTTV3TPV';

    /** @var string Vales - Tipo de impresión para la cabecera 4 */
    public const CTIV4TPV = 'CTIV4TPV';

    /** @var string Vales - Texto de impresión para la cabecera 4 */
    public const CTTV4TPV = 'CTTV4TPV';

    /** @var string Vales - Tipo de impresión para la cabecera 5 */
    public const CTIV5TPV = 'CTIV5TPV';

    /** @var string Vales - Texto de impresión para la cabecera 5 */
    public const CTTV5TPV = 'CTTV5TPV';

    /** @var string Vales - Tipo de impresión para el pie 1 */
    public const PTIV1TPV = 'PTIV1TPV';

    /** @var string Vales - Texto de impresión para el pie 1 */
    public const PTTV1TPV = 'PTTV1TPV';

    /** @var string Vales - Tipo de impresión para el pie 2 */
    public const PTIV2TPV = 'PTIV2TPV';

    /** @var string Vales - Texto de impresión para el pie 2 */
    public const PTTV2TPV = 'PTTV2TPV';

    /** @var string Vales - Tipo de impresión para el pie 3 */
    public const PTIV3TPV = 'PTIV3TPV';

    /** @var string Vales - Texto de impresión para el pie 3 */
    public const PTTV3TPV = 'PTTV3TPV';

    /** @var string Vales - Tipo de impresión para el pie 4 */
    public const PTIV4TPV = 'PTIV4TPV';

    /** @var string Vales - Texto de impresión para el pie 4 */
    public const PTTV4TPV = 'PTTV4TPV';

    public const IEVTPV = 'IEVTPV';

    public const TRDTPV = 'TRDTPV';

    public const ITRTPV = 'ITRTPV';
}
