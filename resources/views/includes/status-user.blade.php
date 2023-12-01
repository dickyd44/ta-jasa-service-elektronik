@if ( $item->role === 'ADMIN' )
<span class="badge bg-olive">ADMIN</span>

@elseif ( $item->role === 'TEKNISI' )
<span class="badge bg-navy">TEKNISI</span>

@endif
