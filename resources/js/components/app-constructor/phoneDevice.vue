<template>
	<div>
		<select style="width: 100%;margin-bottom: 20px; border-radius: 5px; height: 30px;padding: 0 10px;border-color:white;background:white;">
			<option>iPhone 6/7/8</option>
			<option>iPhone X</option>
			<option>samsung S8</option>
			<option>samsung S9</option>
			<option>samsung S10</option>
		</select>

		<div class="smartphone">
			<div class="content" :style="{background: appBg}">
				<div style="width:100%;border:none;height:100%">

				</div>
			</div>
		</div>

		<div class="clearfix"></div>
	</div>
</template>

<script>
export default {
	props: {
	},
	data() {
		return {

		};
	},
	components: {
	},
	computed: {
		appBg() {
			return this.$store.getters.getBg;
		}
	},
	methods: {
	},
	mounted() {
	},
};
</script>

<style lang="scss">

	/* The device with borders */
	.smartphone {
		position: relative;
		width: 360px;
		height: 640px;
		margin: auto;
		border: 16px black solid;
		border-top-width: 60px;
		border-bottom-width: 60px;
		border-radius: 36px;
	}

	/* The horizontal line on the top of the device */
	.smartphone:before {
		content: '';
		display: block;
		width: 60px;
		height: 5px;
		position: absolute;
		top: -30px;
		left: 50%;
		transform: translate(-50%, -50%);
		background: #333;
		border-radius: 10px;
	}

	/* The circle on the bottom of the device */
	.smartphone:after {
		content: '';
		display: block;
		width: 35px;
		height: 35px;
		position: absolute;
		left: 50%;
		bottom: -65px;
		transform: translate(-50%, -50%);
		background: #333;
		border-radius: 50%;
	}

	/* The screen (or content) of the device */
	.smartphone .content {
		width: 328px;
		height: 522px;
		background: white;
	}
</style>
