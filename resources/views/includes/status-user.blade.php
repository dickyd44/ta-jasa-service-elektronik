@if ( $item->role === 'ADMIN' )
<span class="badge bg-secondary">ADMIN</span>

@elseif ( $item->role === 'TEKNISI' )
<span class="badge bg-secondary">TEKNISI</span>

@endif
