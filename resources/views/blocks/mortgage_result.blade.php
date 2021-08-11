@forelse($result as $company)
{{ $company['name'] }}: <span class="price js__calcTotal">{{ $company['sum'] }} <i class="fa fa-rub" aria-hidden="true"></i></span><br>
@empty

@endforelse
<input type="hidden" name="premium_sum" value="{{ json_encode($result, JSON_UNESCAPED_UNICODE) }}">