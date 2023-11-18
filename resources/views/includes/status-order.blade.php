@if ( $item->status === 'PROGRESS' )
<span class="badge badge-info">PROGRESS</span>

@elseif ( $item->status === 'SUCCESS' )
<span class="badge badge-success">SUCCESS</span>

@elseif ( $item->status === 'PENDING' )
<span class="badge badge-danger">PENDING</span>

@endif