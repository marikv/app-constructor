<template>
	<div>
		<h4>{{stepNr}}. Персонализация</h4>
		Выберите основной фон:
		<div style="display: flex; flex-wrap: wrap;justify-content: space-between;">
			<div v-for="(bg, index) in bgs" @click="selectBgColor(index)" :class="getBgColorClass(index)" :style="{ background: bg}">
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
			selectedBgColor: '',
			selectedBgColorIndex: 0,
			bgs: [
				'white',
				'#ecf0f1',
				'#95a5a6',
				'#1abc9c',
				'#2ecc71',
				'#3498db',
				'#176cc0',
				'#9b59b6',
				'#34495e',
				'#f1c40f',
				'#f39c12',
				'#e67e22',
				'#e74c3c',
				'#ff6b81',
				'linear-gradient(to right, #c6ffdd, #fbd786, #f7797d)',
				'linear-gradient(to right, #2193b0, #6dd5ed)',
				'linear-gradient(to right, #12c2e9, #c471ed, #f64f59)',
				'linear-gradient(to right, #dd3e54, #6be585)',
				'linear-gradient(to right, #a8ff78, #78ffd6)',
				'linear-gradient(to right, #11998e, #38ef7d)',
				'linear-gradient(to right, #40e0d0, #ff8c00, #ff0080)',
				'linear-gradient(to right, #52c234, #061700)',
				'linear-gradient(to top, #a18cd1, #fbc2eb)',
				'linear-gradient(120deg, #84fab0 0%, #8fd3f4 100%)',
				'linear-gradient(120deg, #f093fb 0%, #f5576c 100%)',
				'linear-gradient(to right, #fa709a 0%, #fee140 100%)',
				'linear-gradient(to top, #30cfd0 0%, #330867 100%)',
				'radial-gradient(circle 248px at center, #16d9e3 0%, #30c7ec 47%, #46aef7 100%)'
			]
		};
	},
	components: {
	},
	computed: {

	},
	methods: {
		selectBgColor(index) {
			this.selectedBgColorIndex = index;
			this.selectedBgColor = this.bgs[index];
			this.$store.commit('setBg', this.selectedBgColor);
		},
		getBgColorClass(index) {
			let cl = 'card color-choose';
			if (index === this.selectedBgColorIndex) {
				cl = `${cl} color-choose__el_selected`;
			}
			return cl;
		},
	},
	mounted() {
	},
};
</script>

<style lang="scss">
	.color-choose {
		cursor: pointer;
		height: 100px;
		width: 100px;
		margin: 0 10px 10px 0;
		border: 3px solid white;
	}
	.color-choose__el_selected {
		border: 3px solid red;
	}
</style>
