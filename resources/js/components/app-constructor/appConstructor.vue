<template>
	<div>
		<button type="button" class="btn btn-lg btn-primary" data-toggle="modal"
				data-target=".app-constructor__wrapper">
			<i class="material-icons" style="margin-right: 10px;">
				add_circle_outline
			</i>
			Создайте ваше собственное мобильное приложение
		</button>
		* без знаний программирования и дизайна

		<div class="modal fade app-constructor__wrapper"
			 tabindex="-1" role="dialog" aria-labelledby=""
			 aria-hidden="true">
			<div class="modal-dialog modal-xl">
				<div class="modal-content">
					<div class="modal-body">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<i class="material-icons">
								clear
							</i>
						</button>


						<div class="app-constructor__content">

							<div></div>
							<div></div>

						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
</template>

<script>
export default {
	components: {},
	mounted() {
	},
};
</script>

<style>

</style>
