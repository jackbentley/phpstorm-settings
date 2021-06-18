define(
  [
    'marionette',
    'hbs!theme/views/${TEMPLATE}'
  ],
  function (
    Marionette,
    ${TEMPLATE}Template
  ) {
    return Marionette.ItemView.extend({
      template: ${TEMPLATE}Template
    });
  }
);