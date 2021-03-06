var items = [
	['MODIS_Terra_CorrectedReflectance_TrueColor', '250m', 'jpg'],
	['MODIS_Aqua_CorrectedReflectance_TrueColor', '250m', 'jpg'],
	['MODIS_Terra_CorrectedReflectance_Bands721', '250m', 'jpg'],
	['MODIS_Aqua_CorrectedReflectance_Bands721', '250m', 'jpg'],
	['MODIS_Terra_CorrectedReflectance_Bands367', '250m', 'jpg'],
	['MODIS_Terra_SurfaceReflectance_Bands143', '500m', 'jpg'],
	['MODIS_Aqua_SurfaceReflectance_Bands143', '500m', 'jpg'],
	['MODIS_Terra_SurfaceReflectance_Bands721', '500m', 'jpg'],
	['MODIS_Aqua_SurfaceReflectance_Bands721', '500m', 'jpg'],
	['MODIS_Terra_SurfaceReflectance_Bands121', '250m', 'jpg'],
	['MODIS_Aqua_SurfaceReflectance_Bands121', '250m', 'jpg'],
	['VIIRS_CityLights_2012', '500m', 'jpg'],
	// ['MODIS_Terra_Snow_Cover', '500m', 'png'],
	// ['MODIS_Aqua_Snow_Cover', '500m', 'png'],
	['MODIS_Terra_Aerosol', '2km', 'png'],
	['MODIS_Aqua_Aerosol', '2km', 'png'],
	['MODIS_Terra_Land_Surface_Temp_Day', '1km', 'png'],
	['MODIS_Aqua_Land_Surface_Temp_Day', '1km', 'png'],
	['MODIS_Terra_Land_Surface_Temp_Night', '1km', 'png'],
	['MODIS_Aqua_Land_Surface_Temp_Night', '1km', 'png'],
	['MODIS_Terra_Brightness_Temp_Band31_Day', '1km', 'png'],
	['MODIS_Aqua_Brightness_Temp_Band31_Day', '1km', 'png'],
	['MODIS_Terra_Brightness_Temp_Band31_Night', '1km', 'png'],
	['MODIS_Aqua_Brightness_Temp_Band31_Night', '1km', 'png'],
	// ['MODIS_Terra_Sea_Ice', '1km', 'png'],
	// ['MODIS_Aqua_Sea_Ice', '1km', 'png'],
	['MODIS_Terra_Water_Vapor_5km_Day', '2km', 'png'],
	['MODIS_Aqua_Water_Vapor_5km_Day', '2km', 'png'],
	['MODIS_Terra_Water_Vapor_5km_Night', '2km', 'png'],
	['MODIS_Aqua_Water_Vapor_5km_Night', '2km', 'png'],
	['MODIS_Terra_Cloud_Top_Pressure_Day', '2km', 'png'],
	['MODIS_Aqua_Cloud_Top_Pressure_Day', '2km', 'png'],
	['MODIS_Terra_Cloud_Top_Pressure_Night', '2km', 'png'],
	['MODIS_Aqua_Cloud_Top_Pressure_Night', '2km', 'png'],
	['MODIS_Terra_Cloud_Top_Temp_Day', '2km', 'png'],
	['MODIS_Aqua_Cloud_Top_Temp_Day', '2km', 'png'],
	['MODIS_Terra_Cloud_Top_Temp_Night', '2km', 'png'],
	['MODIS_Aqua_Cloud_Top_Temp_Night', '2km', 'png'],
	// ['MODIS_Terra_Data_No_Data', '250m', 'png'],
	// ['MODIS_Aqua_Data_No_Data', '250m', 'png'],
	['AIRS_Dust_Score', '2km', 'png'],
	['AIRS_CO_Total_Column_Day', '2km', 'png'],
	['AIRS_CO_Total_Column_Night', '2km', 'png'],
	// ['AIRS_Prata_SO2_Index_Day', '2km', 'png'],
	// ['AIRS_Prata_SO2_Index_Night', '2km', 'png'],
	['AIRS_Precipitation_Day', '2km', 'png'],
	['AIRS_Precipitation_Night', '2km', 'png'],
	['OMI_Cloud_Pressure', '2km', 'png'],
	['OMI_SO2_Planetary_Boundary_Layer', '2km', 'png'],
	['OMI_SO2_Lower_Troposphere', '2km', 'png'],
	['OMI_SO2_Middle_Troposphere', '2km', 'png'],
	['OMI_SO2_Upper_Troposphere_and_Stratosphere', '2km', 'png'],
	['OMI_Aerosol_Index', '2km', 'png'],
	['OMI_Aerosol_Optical_Depth', '2km', 'png'],
	['OMI_Absorbing_Aerosol_Optical_Depth', '2km', 'png'],
	['MODIS_Combined_Value_Added_AOD', '2km', 'png'],
	['MODIS_Water_Mask', '250m', 'png'],
	// ['MLS_CO_215hPa_Day', '2km', 'png'],
	// ['MLS_CO_215hPa_Night', '2km', 'png'],
	// ['MLS_HNO3_46hPa_Day', '2km', 'png'],
	['MLS_HNO3_46hPa_Night', '2km', 'png'],
	['MLS_N2O_46hPa_Day', '2km', 'png'],
	['MLS_N2O_46hPa_Night', '2km', 'png'],
	['MLS_O3_46hPa_Day', '2km', 'png'],
	['MLS_O3_46hPa_Night', '2km', 'png'],
	['MLS_SO2_147hPa_Day', '2km', 'png'],
	['MLS_SO2_147hPa_Night', '2km', 'png'],
	['MLS_Temperature_46hPa_Day', '2km', 'png'],
	['MLS_Temperature_46hPa_Night', '2km', 'png'],
	['MLS_H2O_46hPa_Day', '2km', 'png'],
	['MLS_H2O_46hPa_Night', '2km', 'png'],
	['Sea_Surface_Temp_Blended', '1km', 'png'],
	['Sea_Surface_Temp_Infrared', '500m', 'png'],
	['MODIS_Terra_Chlorophyll_A', '1km', 'png'],
	['MODIS_Aqua_Chlorophyll_A', '1km', 'png'],
	['MEaSUREs_Daily_Landscape_Freeze_Thaw_AMSRE', '2km', 'png'],
	['MEaSUREs_Daily_Landscape_Freeze_Thaw_SSMI', '2km', 'png'],
	['AMSRE_Brightness_Temp_89H_Day', '2km', 'png'],
	['AMSRE_Brightness_Temp_89H_Night', '2km', 'png'],
	['AMSRE_Brightness_Temp_89V_Day', '2km', 'png'],
	['AMSRE_Brightness_Temp_89V_Night', '2km', 'png'] 

]




	