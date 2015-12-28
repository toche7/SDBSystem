<script>
$('#delete-confirm').on('show', function() {
  var $submit = $(this).find('.btn-danger'),
      href = $submit.attr('href');
  $submit.attr('href', href.replace('pony', $(this).data('id')));
});

$('.delete-confirm').click(function(e) {
  e.preventDefault();
  $('#delete-confirm').data('id', $(this).data('id')).modal('show');
});
</script>

<div class="modal fade" id="delete-confirm">
  <div class="modal-header">
    <a class="close" data-dismiss="modal">×</a>
    <h3>Delete this thing?</h3>
  </div>
  <div class="modal-body">
    <p>Be certain, sonny.</p>
  </div>
  <div class="modal-footer">
    <%= link_to 'Delete', something_path+'/pony', method: :delete, :class => 'btn btn-danger' %>
    <a href="#" data-dismiss="modal" class="btn">Cancel</a>
  </div>
</div>

<a href="#delete-confirm" data-id="<%= @something.id %>" class="delete-confirm btn btn-danger">"Delete"</a>