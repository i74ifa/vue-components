<template>
    <div class="modal fade" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header" v-html="title">
                    <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="modal"
                        aria-label="Close"
                    ></button>
                </div>
                <div class="modal-body">
                    <slot></slot>
                </div>
                <div class="modal-footer">
                    <button
                        type="button"
                        class="btn btn-secondary"
                        data-bs-dismiss="modal"
                        v-html="btn_close"
                    >Close</button>
                    <button type="button" class="btn btn-primary" v-html="btn_title">Send</button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: ["title", "btn_title", "btn_close"],
};
</script>