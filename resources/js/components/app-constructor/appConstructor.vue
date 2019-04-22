<template>
	<div>
		<button type="button" class="btn btn-lg btn-primary" data-toggle="modal"
				data-target=".app-constructor__wrapper">
			<i class="material-icons" style="margin-right: 10px;">
				add_circle_outline
			</i>
			Создайте ваше собственное мобильное приложение
		</button>

		<div class="modal fade app-constructor__wrapper"
			 tabindex="-1" role="dialog" aria-labelledby=""
			 aria-hidden="true">
			<div class="modal-dialog modal-xl">

				<div class="modal-content">
					<div class="modal-body">
						<div>

							<div class="app-constructor__content" >

								<div class="app-constructor__content_left" >
									<div class="app-constructor__content_left-child app-constructor__content_right-scrollable-----">
										<h4 :class="stepClass(1)" @click="goToStep(1)">1. Авторизация</h4>
										<h4 :class="stepClass(2)" @click="goToStep(2)">2. Вводные данные</h4>
										<h4 :class="stepClass(3)" @click="goToStep(3)">3. Персонализация</h4>
										<h4 :class="stepClass(4)" @click="goToStep(4)">4. Выбор модулей</h4>
										<h4 :class="stepClass(5)" @click="goToStep(5)">5. Выбор шаблона</h4>
										<h4 :class="stepClass(6)" @click="goToStep(6)">6. Экспорт</h4>

										<div style="display: flex;justify-content:right;">
											<button type="button" class="btn btn-light btn-block" data-dismiss="modal" aria-label="Close">
												Закрыть
											</button>
										</div>
									</div>
								</div>
								<div class="app-constructor__content_center" >
									<div  class="app-constructor__content_center-child app-constructor__content_center-scrollable">

										<div v-if="!userIsAuthorized">
											<div>Для того что бы продолжить, вам необходимо
												<a href="/register">зарегистрироваться</a> в системе, или
												<a href="/login">войти</a> если у вас уже имеется учётная запись</div>
										</div>
										<div v-else-if="activeStep === 2">
											<step-global-data stepNr="2"></step-global-data>
										</div>
										<div v-else-if="activeStep === 3">
											<step-personalization stepNr="3"></step-personalization>
										</div>
										<div v-else-if="activeStep === 4">
											4
										</div>
										<div v-else-if="activeStep === 5">
											5
										</div>
										<div v-else-if="activeStep === 6">
											<step-export stepNr="6"></step-export>
										</div>
									</div>
								</div>

								<div class="app-constructor__content_right" >
									<div  class="app-constructor__content_right-child app-constructor__content_right-scrollable">
										<phone-device></phone-device>
									</div>
								</div>

							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
</template>

<script>
import phoneDevice from './phoneDevice';
import stepPersonalization from './stepPersonalization';
import stepGlobalData from './stepGlobalData';
import stepExport from './stepExport';

export default {
	data() {
		return {
			activeStep: 1,
		};
	},
	components: {
		stepExport,
		stepPersonalization,
		stepGlobalData,
		phoneDevice,
	},
	computed: {
		completedSteps() {
			return this.$store.getters.getCompletedSteps;
		},
		userIsAuthorized() {
			const auth = this.$store.getters.getAuthorized;
			if (auth && this.activeStep === 1) {
				this.activeStep = 2;
				if (this.completedSteps.indexOf(1) === -1) {
					this.$store.commit('addCompletedSteps', 1);
				}
			}
			return auth;
		},
	},
	methods: {
		goToStep(nr) {
			if (this.userIsAuthorized && nr === 1) return;
			if (!this.userIsAuthorized && nr !== 1) return;
			this.activeStep = nr;
		},
		stepClass(nr) {
			let cl = 'app-constructor__step';
			nr  = parseInt(nr, 10);
			if (nr === this.activeStep) {
				cl = `${cl} app-constructor__step_active`;
			} else if (this.completedSteps.indexOf(nr) > -1) {
				cl = `${cl} app-constructor__step_completed`;
			}
			return cl;
		},
	},
	mounted() {
	},
};
</script>

<style lang="scss">
	.app-constructor__content {
		height:100%;
		min-height: 50vh;
		display:flex;
		display: -webkit-flex;
		flex-direction: row;
		-webkit-flex-direction: row;
		-webkit-align-content: stretch;
		align-content: stretch;
		a {
			color: #ff79b1;
		}
	}
	.app-constructor__content_left {
		background-color:lightgreen;
		width:300px;
		text-align: left;
		padding: 20px;
	}

	.app-constructor__content_right {
		background-color: #0cb090;
		width:400px;
		text-align: left;
		padding: 20px;
	}

	.app-constructor__content_center {
		background-color:steelblue;
		-webkit-flex: 1;
		flex:1;
		position:relative;
	}
	.app-constructor__content_center-child {
		position:absolute;
		width:100%;
		height:100%;
		color: white;
		text-align: left;
		padding: 20px;
	}
	.app-constructor__content_center-scrollable {
		overflow-y:auto;
	}

	.app-constructor__step {
		color: #969696;
		cursor: pointer;
		padding: 3px 15px;
		border-radius: 4px;
	}
	.app-constructor__step:hover {
		background-color: white;
	}
	.app-constructor__step_completed {
		color: #969696;
		text-decoration: line-through;
	}
	.app-constructor__step_active {
		color: #424242;
		text-decoration: none;
	}
</style>
