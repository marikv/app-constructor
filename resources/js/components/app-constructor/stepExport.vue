<template>
	<div>
		<h4>{{stepNr}}. Экспорт</h4>

		<div class="alert alert-warning alert-dismissible">После запуска процесса, все данные уйдут на сервер для создания приложения!</div>
		<button class="btn btn-block btn-warning" @click="initExport()">Запустить процесс</button>

		<div class="clearfix" style="margin-bottom: 20px;"></div>

		<div class="progress" v-show="progressWidth > 0">
			<div class="progress-bar bg-warning progress-bar-striped progress-bar-animated"
				 role="progressbar" :style="{ width: `${progressWidth}%` }"
				 aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
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
			progressWidth: 0,
		};
	},
	components: {
	},
	computed: {

	},
	methods: {
		initExport() {
			const that = this;
			const interval = setInterval(() => {
				if (that.progressWidth < 100) {
					that.progressWidth += 10;
				} else {
					clearInterval(interval);
					that.progressWidth = 0;
				}
			}, 1000);
		}
	},
	mounted() {
	},
};
</script>

<style lang="scss">

</style>
