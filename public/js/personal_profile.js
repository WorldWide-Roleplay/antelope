$(function() {
  $('#ajax_profile_activity-table').DataTable({
     ordering: true,
     serverSide: true,
     searching: false,
     ajax: $url_user_profile,
     order: [[ 0  , "desc" ]],
     columns: [
      { data: 'id', name: 'id', searchable: false, render: function (data, type, row) {
        return  $user_profile_constant + data;
      } },
      { data: 'patrol_start_end_date', name: 'patrol_start_end_date' },
      { data: 'start_time', name: 'start_time' },
      { data: 'end_time', name: 'end_time' },
      { data: 'patrol_duration', name: 'patrol_duration' },
      { data: 'details', name: 'details', render: function (data, type, row) {
        var allowedLength = 35;
        if (data.length >= allowedLength) {
          return data.substr(0, allowedLength)+'...';
        } else {
          return data;
        };
      } },
      { data: 'id', render: function(data, type, row) { return '<button class="btn btn-outline-primary" id="ajax_view_patrol_log_open" value="'+data+'"><i class="mdi mdi-eye"></i> View</button>'; } }
     ]
  });
});