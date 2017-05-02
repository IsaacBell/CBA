module CheckinsHelper
	def build_visitor(visitor)
		visitor.visit_reasons.build if visitor.visit_reasons.empty?
		visitor
	end
end
