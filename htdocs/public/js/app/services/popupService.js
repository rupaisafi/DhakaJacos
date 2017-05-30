angular
	.module("jDhaka")
		.service("popupWindow",function () {
			return function () {
				this.x=0;
				this.y=0;
			}
		})