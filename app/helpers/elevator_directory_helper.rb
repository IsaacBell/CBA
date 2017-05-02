module ElevatorDirectoryHelper
	
	def deptstyle dept
		case
			when dept == "dept0"
				"top: 0px;"
			when dept == "dept1"
				"top: 126px;"
			when dept == "dept2"
				"top: 252px;"
			when dept == "dept3"
				"top: 504px;"
			when dept == "dept4"
				"top: 815px;"
			when dept == "dept5"
				"top: 1213px;"
			when dept == "dept6"
				"top: 1495px;"
			when dept == "color_legend"
				""
		end
	end
	
	def building build
		case
			when build == "Alston Hall"
				"faculty"
			when build == "Bidgood Hall"
				"bidgood"
			when build == "Bevill"
				"bevill"
			when build == "AIME"
				"aime"
      end
	end
	
end
