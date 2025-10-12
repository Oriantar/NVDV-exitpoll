<table style="width: 100%; border-collapse: collapse;">
    <tr>
        @foreach ($tokens as $index => $token)
            <td style="padding: 8px; text-align: center;">
                {{ $token->token }}
            </td>

            @if (($index + 1) % 5 == 0)
                </tr><tr>
            @endif
        @endforeach
    </tr>
</table>