<template>
	<div>
		<h4>{{stepNr}}. Вводные данные</h4>

		<div class="form-group row">
			<label for="app-name" class="col-sm-12 col-form-label">Наименование</label>
			<div class="col-sm-12">
				<input type="text" class="form-control" id="app-name" placeholder="Наименование">
			</div>
		</div>

		<div class="form-group row">
			<label for="app-phone" class="col-sm-12 col-form-label">Номер телефона</label>
			<div class="col-sm-12">
				<input type="text" class="form-control" id="app-phone" placeholder="Номер телефона">
			</div>
		</div>

		<div class="form-group row">
			<label for="app-desc" class="col-sm-12 col-form-label">Краткое описание</label>
			<div class="col-sm-12">
				<textarea class="form-control" id="app-desc" placeholder="Краткое описание" required></textarea>
			</div>
		</div>

		<div class="clearfix"></div>
	</div>
</template>

<script>
export default {
	props: {
		stepNr: {
			type: [Number, String],
			required: true,
		},
	},
	data() {
		return {

		};
	},
	components: {
	},
	computed: {

	},
	methods: {
	},
	mounted() {
	},
};
</script>

<style lang="scss">

</style>
