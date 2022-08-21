@if(!empty($notifications_data))
  @foreach($notifications_data as $notification_data)
    @if($notification_data->notifiable_type == 1)
    <li class="@if(empty($notification_data['read_at'])) unread @endif notification-li">
      @if($notification_data->notifiable_type == 1)
      <a href="{{ url('/products') }}"
      class="show-notification-in-popup" >
        <i class="notif-icon {{$notification_data['icon_class'] ?? ''}}"></i> 
        <span class="notif-info">{!! $notification_data['data'] ?? '' !!}</span>
        <span class="time">{{$notification_data['created_at']}}</span>
      </a>
        @endif
    </li>
    @else
    <li class="@if(empty($notification_data['read_at'])) unread @endif notification-li">
      <a href="{{$notification_data['link'] ?? '#'}}"
      @if(isset($notification_data['show_popup'])) class="show-notification-in-popup" @endif >
        <i class="notif-icon {{$notification_data['icon_class'] ?? ''}}"></i>
        <span class="notif-info">{!! $notification_data['msg'] ?? '' !!}</span>
        <span class="time">{{$notification_data['created_at']}}</span>
      </a>
    </li>
    @endif
  @endforeach
@else
  <li class="text-center no-notification notification-li">
    @lang('lang_v1.no_notifications_found')
  </li>
@endif