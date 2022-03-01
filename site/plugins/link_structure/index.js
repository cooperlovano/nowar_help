panel.plugin("link_structure/link-preview", {
  components: {
    "k-structure-field-preview": {
      props: {
        value: String,
        column: Object,
        field: Object
      },
      computed: {
        entries() {
          return this.value;
        },
        entriesString() {
          return this.entries
            .map(entry => Object.values(entry))
            .map(row => row.join("–"))
            .join();
        }
      },
      template: '<p class="k-structure-table-text">sfd{{entriesString}}</p>'
    }
  }
});