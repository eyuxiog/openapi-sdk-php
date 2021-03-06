<?php

namespace AlibabaCloud\Emr\V20160408;

use AlibabaCloud\ApiResolverTrait;

/**
 * Resolve Api based on the method name.
 *
 * @method ListETLJobRelease listETLJobRelease(array $options = [])
 * @method GetJobMigrateResult getJobMigrateResult(array $options = [])
 * @method DescribeFlowVariableCollection describeFlowVariableCollection(array $options = [])
 * @method ModifyFlowVariableCollection modifyFlowVariableCollection(array $options = [])
 * @method SyncDataSourceSchemaTable syncDataSourceSchemaTable(array $options = [])
 * @method SyncDataSourceSchemaDatabase syncDataSourceSchemaDatabase(array $options = [])
 * @method KillETLJobInstance killETLJobInstance(array $options = [])
 * @method ReleaseETLJob releaseETLJob(array $options = [])
 * @method CloneDataSource cloneDataSource(array $options = [])
 * @method CloneETLJob cloneETLJob(array $options = [])
 * @method CancelETLJobRelease cancelETLJobRelease(array $options = [])
 * @method ListClusterTag listClusterTag(array $options = [])
 * @method DescribeETLJobStageOutputSchema describeETLJobStageOutputSchema(array $options = [])
 * @method UpdateProjectSetting updateProjectSetting(array $options = [])
 * @method UpdateETLJobStage updateETLJobStage(array $options = [])
 * @method ListDataSourceSchemaDatabase listDataSourceSchemaDatabase(array $options = [])
 * @method ListDataSourceSchemaTable listDataSourceSchemaTable(array $options = [])
 * @method ResolveETLJobSqlSchema resolveETLJobSqlSchema(array $options = [])
 * @method DescribeETLJobSqlSchema describeETLJobSqlSchema(array $options = [])
 * @method DescribeDataSourceSchemaTable describeDataSourceSchemaTable(array $options = [])
 * @method DescribeDataSourceSchemaDatabase describeDataSourceSchemaDatabase(array $options = [])
 * @method UpdateNavNode updateNavNode(array $options = [])
 * @method UpdateDataSource updateDataSource(array $options = [])
 * @method UpdateETLJob updateETLJob(array $options = [])
 * @method RunETLJob runETLJob(array $options = [])
 * @method ListNavSubTree listNavSubTree(array $options = [])
 * @method ListETLJobTriggerEntity listETLJobTriggerEntity(array $options = [])
 * @method ListETLJobInstance listETLJobInstance(array $options = [])
 * @method ListDataSource listDataSource(array $options = [])
 * @method DescribeETLJobInstance describeETLJobInstance(array $options = [])
 * @method DescribeETLJob describeETLJob(array $options = [])
 * @method DescribeDataSourceSchema describeDataSourceSchema(array $options = [])
 * @method DescribeDataSourceCommand describeDataSourceCommand(array $options = [])
 * @method DescribeDataSource describeDataSource(array $options = [])
 * @method DeleteNavNode deleteNavNode(array $options = [])
 * @method DeleteETLJob deleteETLJob(array $options = [])
 * @method DeleteDataSource deleteDataSource(array $options = [])
 * @method CreateNavNode createNavNode(array $options = [])
 * @method CreateETLJob createETLJob(array $options = [])
 * @method CreateDataSource createDataSource(array $options = [])
 * @method CheckDataSource checkDataSource(array $options = [])
 * @method ListSupportedServiceName listSupportedServiceName(array $options = [])
 * @method ListClusterServiceCustomActionSupportConfig listClusterServiceCustomActionSupportConfig(array $options = [])
 * @method CommonApiWhiteList commonApiWhiteList(array $options = [])
 * @method MetastoreUpdateKafkaTopicBatch metastoreUpdateKafkaTopicBatch(array $options = [])
 * @method RenderResourcePoolXml renderResourcePoolXml(array $options = [])
 * @method DeleteClusterHostGroup deleteClusterHostGroup(array $options = [])
 * @method CreateClusterHostGroup createClusterHostGroup(array $options = [])
 * @method ModifyClusterHostGroup modifyClusterHostGroup(array $options = [])
 * @method MigrateClusterHostGroupHost migrateClusterHostGroupHost(array $options = [])
 * @method ListResourceQueue listResourceQueue(array $options = [])
 * @method MetastoreListTablePartition metastoreListTablePartition(array $options = [])
 * @method ContextQueryLog contextQueryLog(array $options = [])
 * @method MetastoreListPartition metastoreListPartition(array $options = [])
 * @method AttachPubIp attachPubIp(array $options = [])
 * @method MetastoreUpdateKafkaTopic metastoreUpdateKafkaTopic(array $options = [])
 * @method MetastoreListKafkaTopic metastoreListKafkaTopic(array $options = [])
 * @method MetastoreListKafkaConsumerGroup metastoreListKafkaConsumerGroup(array $options = [])
 * @method MetastoreDescribeKafkaConsumerGroup metastoreDescribeKafkaConsumerGroup(array $options = [])
 * @method MetastoreDescribeKafkaTopic metastoreDescribeKafkaTopic(array $options = [])
 * @method MetastoreDeleteKafkaTopic metastoreDeleteKafkaTopic(array $options = [])
 * @method MetastoreCreateKafkaTopic metastoreCreateKafkaTopic(array $options = [])
 * @method StartFlow startFlow(array $options = [])
 * @method GetLogHistogram getLogHistogram(array $options = [])
 * @method ListFlowNodeInstance listFlowNodeInstance(array $options = [])
 * @method DescribeFlowJobStatistic describeFlowJobStatistic(array $options = [])
 * @method RemoveClusterHosts removeClusterHosts(array $options = [])
 * @method DescribeClusterStatistics describeClusterStatistics(array $options = [])
 * @method MetastoreDescribeTask metastoreDescribeTask(array $options = [])
 * @method MetastoreRetryTask metastoreRetryTask(array $options = [])
 * @method MetastoreListTask metastoreListTask(array $options = [])
 * @method MetastoreListDataSource metastoreListDataSource(array $options = [])
 * @method MetastoreDescribeDataSource metastoreDescribeDataSource(array $options = [])
 * @method MetastoreUpdateTable metastoreUpdateTable(array $options = [])
 * @method QueryServiceMetricData queryServiceMetricData(array $options = [])
 * @method ListExecutePlanMigrateInfo listExecutePlanMigrateInfo(array $options = [])
 * @method ModifyPreMigrateJobs modifyPreMigrateJobs(array $options = [])
 * @method MigrateJobs migrateJobs(array $options = [])
 * @method PreMigrateJobs preMigrateJobs(array $options = [])
 * @method DescribeJobMigrateInfo describeJobMigrateInfo(array $options = [])
 * @method ListJobMigrateInfo listJobMigrateInfo(array $options = [])
 * @method AuthorizeSecurityGroup authorizeSecurityGroup(array $options = [])
 * @method DescribeSecurityGroupAttribute describeSecurityGroupAttribute(array $options = [])
 * @method DescribeUserStatistics describeUserStatistics(array $options = [])
 * @method ModifyUserStatistics modifyUserStatistics(array $options = [])
 * @method ListUserStatistics listUserStatistics(array $options = [])
 * @method CreateUserStatistics createUserStatistics(array $options = [])
 * @method RetryCreateUserPassword retryCreateUserPassword(array $options = [])
 * @method CreateVerificationCode createVerificationCode(array $options = [])
 * @method CreateAlertContact createAlertContact(array $options = [])
 * @method DeleteAlertContacts deleteAlertContacts(array $options = [])
 * @method ListAlertContacts listAlertContacts(array $options = [])
 * @method ModifyAlertContact modifyAlertContact(array $options = [])
 * @method ListAlertDingDingGroup listAlertDingDingGroup(array $options = [])
 * @method ListAlertUserGroup listAlertUserGroup(array $options = [])
 * @method CreateAlertDingDingGroup createAlertDingDingGroup(array $options = [])
 * @method ModifyAlertDingDingGroup modifyAlertDingDingGroup(array $options = [])
 * @method DeleteAlertDingDingGroups deleteAlertDingDingGroups(array $options = [])
 * @method DeleteAlertUserGroups deleteAlertUserGroups(array $options = [])
 * @method ModifyAlertUserGroup modifyAlertUserGroup(array $options = [])
 * @method CreateAlertUserGroup createAlertUserGroup(array $options = [])
 * @method QuerySlsMetricData querySlsMetricData(array $options = [])
 * @method CloneFlowJob cloneFlowJob(array $options = [])
 * @method CloneFlow cloneFlow(array $options = [])
 * @method ListFlow listFlow(array $options = [])
 * @method ListScalingTaskGroup listScalingTaskGroup(array $options = [])
 * @method ModifyScalingRule modifyScalingRule(array $options = [])
 * @method ModifyScalingTaskGroup modifyScalingTaskGroup(array $options = [])
 * @method DescribeScalingTaskGroup describeScalingTaskGroup(array $options = [])
 * @method DeleteScalingRule deleteScalingRule(array $options = [])
 * @method DeleteScalingTaskGroup deleteScalingTaskGroup(array $options = [])
 * @method CreateScalingTaskGroup createScalingTaskGroup(array $options = [])
 * @method CreateScalingRule createScalingRule(array $options = [])
 * @method ListScalingRule listScalingRule(array $options = [])
 * @method ListScalingActivity listScalingActivity(array $options = [])
 * @method DescribeScalingRule describeScalingRule(array $options = [])
 * @method DescribeScalingActivity describeScalingActivity(array $options = [])
 * @method ListClusterServiceComponentHealthInfo listClusterServiceComponentHealthInfo(array $options = [])
 * @method DeleteFlowProjectById deleteFlowProjectById(array $options = [])
 * @method DescribeEmrMainVersion describeEmrMainVersion(array $options = [])
 * @method ListEmrMainVersion listEmrMainVersion(array $options = [])
 * @method OperateExistsNodeCluster operateExistsNodeCluster(array $options = [])
 * @method CreateUsers createUsers(array $options = [])
 * @method CreateUserPassword createUserPassword(array $options = [])
 * @method ListUsers listUsers(array $options = [])
 * @method DeleteUser deleteUser(array $options = [])
 * @method MetastoreDeleteDataResource metastoreDeleteDataResource(array $options = [])
 * @method MetastoreCreateDataResource metastoreCreateDataResource(array $options = [])
 * @method MetastoreListDataResources metastoreListDataResources(array $options = [])
 * @method MetastoreModifyDataResource metastoreModifyDataResource(array $options = [])
 * @method ListFlowJob listFlowJob(array $options = [])
 * @method ListFlowClusterAllHosts listFlowClusterAllHosts(array $options = [])
 * @method ListEmrAvailableConfig listEmrAvailableConfig(array $options = [])
 * @method ListEmrAvailableResource listEmrAvailableResource(array $options = [])
 * @method CreateClusterWithTemplate createClusterWithTemplate(array $options = [])
 * @method ListFlowNodeSqlResult listFlowNodeSqlResult(array $options = [])
 * @method ListFlowClusterAll listFlowClusterAll(array $options = [])
 * @method GetUserOutputStatisticInfo getUserOutputStatisticInfo(array $options = [])
 * @method GetUserSubmissionStatisticInfo getUserSubmissionStatisticInfo(array $options = [])
 * @method GetUserInputStatisticInfo getUserInputStatisticInfo(array $options = [])
 * @method GetQueueInputStatisticInfo getQueueInputStatisticInfo(array $options = [])
 * @method GetQueueOutputStatisticInfo getQueueOutputStatisticInfo(array $options = [])
 * @method GetQueueSubmissionStatisticInfo getQueueSubmissionStatisticInfo(array $options = [])
 * @method GetJobRunningTimeStatisticInfo getJobRunningTimeStatisticInfo(array $options = [])
 * @method GetHdfsCapacityStatisticInfo getHdfsCapacityStatisticInfo(array $options = [])
 * @method GetJobInputStatisticInfo getJobInputStatisticInfo(array $options = [])
 * @method GetJobOutputStatisticInfo getJobOutputStatisticInfo(array $options = [])
 * @method KillFlowJob killFlowJob(array $options = [])
 * @method ModifyFlowForWeb modifyFlowForWeb(array $options = [])
 * @method CreateFlowForWeb createFlowForWeb(array $options = [])
 * @method DescribeFlowNodeInstanceLauncherLog describeFlowNodeInstanceLauncherLog(array $options = [])
 * @method ListFlowNodeInstanceContainerStatus listFlowNodeInstanceContainerStatus(array $options = [])
 * @method DescribeFlowNodeInstanceContainerLog describeFlowNodeInstanceContainerLog(array $options = [])
 * @method SuspendFlow suspendFlow(array $options = [])
 * @method SubmitFlow submitFlow(array $options = [])
 * @method SubmitFlowJob submitFlowJob(array $options = [])
 * @method ResumeFlow resumeFlow(array $options = [])
 * @method RerunFlow rerunFlow(array $options = [])
 * @method ModifyFlowJob modifyFlowJob(array $options = [])
 * @method ModifyFlowProject modifyFlowProject(array $options = [])
 * @method ModifyFlowProjectClusterSetting modifyFlowProjectClusterSetting(array $options = [])
 * @method ModifyFlow modifyFlow(array $options = [])
 * @method ModifyFlowCategory modifyFlowCategory(array $options = [])
 * @method ListFlowProjectUser listFlowProjectUser(array $options = [])
 * @method ListFlowProject listFlowProject(array $options = [])
 * @method ListFlowProjectClusterSetting listFlowProjectClusterSetting(array $options = [])
 * @method ListFlowClusterHost listFlowClusterHost(array $options = [])
 * @method ListFlowInstance listFlowInstance(array $options = [])
 * @method ListFlowJobHistory listFlowJobHistory(array $options = [])
 * @method ListFlowCategory listFlowCategory(array $options = [])
 * @method ListFlowCluster listFlowCluster(array $options = [])
 * @method KillFlow killFlow(array $options = [])
 * @method DescribeFlowProjectClusterSetting describeFlowProjectClusterSetting(array $options = [])
 * @method DescribeFlowNodeInstance describeFlowNodeInstance(array $options = [])
 * @method DescribeFlowProject describeFlowProject(array $options = [])
 * @method DescribeFlowCategoryTree describeFlowCategoryTree(array $options = [])
 * @method DescribeFlowInstance describeFlowInstance(array $options = [])
 * @method DescribeFlowJob describeFlowJob(array $options = [])
 * @method DescribeFlow describeFlow(array $options = [])
 * @method DescribeFlowCategory describeFlowCategory(array $options = [])
 * @method DeleteFlowProject deleteFlowProject(array $options = [])
 * @method DeleteFlowProjectClusterSetting deleteFlowProjectClusterSetting(array $options = [])
 * @method DeleteFlowProjectUser deleteFlowProjectUser(array $options = [])
 * @method DeleteFlow deleteFlow(array $options = [])
 * @method DeleteFlowCategory deleteFlowCategory(array $options = [])
 * @method DeleteFlowJob deleteFlowJob(array $options = [])
 * @method CreateFlowProject createFlowProject(array $options = [])
 * @method CreateFlowProjectClusterSetting createFlowProjectClusterSetting(array $options = [])
 * @method CreateFlowProjectUser createFlowProjectUser(array $options = [])
 * @method CreateFlow createFlow(array $options = [])
 * @method CreateFlowCategory createFlowCategory(array $options = [])
 * @method CreateFlowJob createFlowJob(array $options = [])
 * @method DescribeAvailableInstanceType describeAvailableInstanceType(array $options = [])
 * @method GetOpsCommandDetail getOpsCommandDetail(array $options = [])
 * @method ListOpsOperationTask1 listOpsOperationTask1(array $options = [])
 * @method ListOpsOperationTask listOpsOperationTask(array $options = [])
 * @method GetOpsCommandResultOnce getOpsCommandResultOnce(array $options = [])
 * @method GetOpsCommandResult getOpsCommandResult(array $options = [])
 * @method RunOpsCommand runOpsCommand(array $options = [])
 * @method GetSupportedOpsCommand getSupportedOpsCommand(array $options = [])
 * @method ListOpsOperation listOpsOperation(array $options = [])
 * @method SearchLog searchLog(array $options = [])
 * @method ListServiceLog listServiceLog(array $options = [])
 * @method ListSlsLogstoreInfo listSlsLogstoreInfo(array $options = [])
 * @method GetLogDownloadUrl getLogDownloadUrl(array $options = [])
 * @method ListClusterFullServiceQuickLink listClusterFullServiceQuickLink(array $options = [])
 * @method ListJobExecutionPlanParams listJobExecutionPlanParams(array $options = [])
 * @method ModifyResourcePool modifyResourcePool(array $options = [])
 * @method ModifyResourceQueue modifyResourceQueue(array $options = [])
 * @method ModifyJobExecutionPlanFolder modifyJobExecutionPlanFolder(array $options = [])
 * @method ModifyJobExecutionPlanParam modifyJobExecutionPlanParam(array $options = [])
 * @method ModifyClusterTemplate modifyClusterTemplate(array $options = [])
 * @method ListJobExecutionPlanHierarchy listJobExecutionPlanHierarchy(array $options = [])
 * @method RefreshClusterResourcePool refreshClusterResourcePool(array $options = [])
 * @method ListClusterTemplates listClusterTemplates(array $options = [])
 * @method DescribeClusterTemplate describeClusterTemplate(array $options = [])
 * @method DeleteClusterTemplate deleteClusterTemplate(array $options = [])
 * @method CreateClusterTemplate createClusterTemplate(array $options = [])
 * @method SuspendExecutionPlanInstance suspendExecutionPlanInstance(array $options = [])
 * @method ResumeExecutionPlanInstance resumeExecutionPlanInstance(array $options = [])
 * @method RetryExecutionPlanInstance retryExecutionPlanInstance(array $options = [])
 * @method CreateResourceQueue createResourceQueue(array $options = [])
 * @method DeleteResourceQueue deleteResourceQueue(array $options = [])
 * @method DescribeClusterResourcePoolSchedulerType describeClusterResourcePoolSchedulerType(array $options = [])
 * @method CreateResourcePool createResourcePool(array $options = [])
 * @method DeleteResourcePool deleteResourcePool(array $options = [])
 * @method ListResourcePool listResourcePool(array $options = [])
 * @method ModifyResourcePoolSchedulerType modifyResourcePoolSchedulerType(array $options = [])
 * @method ListClusterHostGroup listClusterHostGroup(array $options = [])
 * @method DescribeClusterServiceConfigTag describeClusterServiceConfigTag(array $options = [])
 * @method QueryAlarmHistory queryAlarmHistory(array $options = [])
 * @method QueryAlarmRules queryAlarmRules(array $options = [])
 * @method ListClusterServiceQuickLink listClusterServiceQuickLink(array $options = [])
 * @method ListClusterServiceConfigHistory listClusterServiceConfigHistory(array $options = [])
 * @method ReleaseClusterHostGroup releaseClusterHostGroup(array $options = [])
 * @method DescribeClusterV2 describeClusterV2(array $options = [])
 * @method ResizeClusterV2 resizeClusterV2(array $options = [])
 * @method CreateClusterV2 createClusterV2(array $options = [])
 * @method DescribeClusterOpLog describeClusterOpLog(array $options = [])
 * @method TerminateClusterOperation terminateClusterOperation(array $options = [])
 * @method ListDependedService listDependedService(array $options = [])
 * @method DescribeClusterBasicInfo describeClusterBasicInfo(array $options = [])
 * @method ListClusterHostComponent listClusterHostComponent(array $options = [])
 * @method ListClusterHost listClusterHost(array $options = [])
 * @method DescribeClusterServiceConfigHistory describeClusterServiceConfigHistory(array $options = [])
 * @method ListRequiredService listRequiredService(array $options = [])
 * @method DescribeClusterService describeClusterService(array $options = [])
 * @method RunClusterServiceAction runClusterServiceAction(array $options = [])
 * @method ModifyClusterServiceConfig modifyClusterServiceConfig(array $options = [])
 * @method ListClusterService listClusterService(array $options = [])
 * @method ListClusterOperation listClusterOperation(array $options = [])
 * @method ListClusterOperationHost listClusterOperationHost(array $options = [])
 * @method ListClusterOperationHostTask listClusterOperationHostTask(array $options = [])
 * @method DescribeClusterServiceConfig describeClusterServiceConfig(array $options = [])
 * @method DescribeClusterOperationHostTaskLog describeClusterOperationHostTaskLog(array $options = [])
 * @method AddClusterService addClusterService(array $options = [])
 * @method CancelOrder cancelOrder(array $options = [])
 * @method MetastoreSearchTables metastoreSearchTables(array $options = [])
 * @method MetastoreDataPreview metastoreDataPreview(array $options = [])
 * @method RunNoteParagraphs runNoteParagraphs(array $options = [])
 * @method StopParagraph stopParagraph(array $options = [])
 * @method RunParagraph runParagraph(array $options = [])
 * @method DescribeParagraph describeParagraph(array $options = [])
 * @method DeleteNote deleteNote(array $options = [])
 * @method DeleteParagraph deleteParagraph(array $options = [])
 * @method MetastoreDropTable metastoreDropTable(array $options = [])
 * @method MetastoreListDatabases metastoreListDatabases(array $options = [])
 * @method MetastoreListTables metastoreListTables(array $options = [])
 * @method MetastoreDescribeDatabase metastoreDescribeDatabase(array $options = [])
 * @method MetastoreDescribeTable metastoreDescribeTable(array $options = [])
 * @method MetastoreDropDatabase metastoreDropDatabase(array $options = [])
 * @method MetastoreCreateDatabase metastoreCreateDatabase(array $options = [])
 * @method MetastoreCreateTable metastoreCreateTable(array $options = [])
 * @method DetachClusterForNote detachClusterForNote(array $options = [])
 * @method AttachClusterForNote attachClusterForNote(array $options = [])
 * @method SaveParagraph saveParagraph(array $options = [])
 * @method ListNotes listNotes(array $options = [])
 * @method DescribeNote describeNote(array $options = [])
 * @method CreateNote createNote(array $options = [])
 * @method CreateParagraph createParagraph(array $options = [])
 * @method RetryExecutionPlan retryExecutionPlan(array $options = [])
 * @method ListJobExecutionInstanceTrend listJobExecutionInstanceTrend(array $options = [])
 * @method ListExecutionPlanInstanceTrend listExecutionPlanInstanceTrend(array $options = [])
 * @method ListFailureJobExecutionInstances listFailureJobExecutionInstances(array $options = [])
 * @method ModifyExecutionPlanClusterInfo modifyExecutionPlanClusterInfo(array $options = [])
 * @method ModifyExecutionPlanJobInfo modifyExecutionPlanJobInfo(array $options = [])
 * @method ModifyExecutionPlanScheduleInfo modifyExecutionPlanScheduleInfo(array $options = [])
 * @method ModifyExecutionPlanBasicInfo modifyExecutionPlanBasicInfo(array $options = [])
 * @method ListClusterScripts listClusterScripts(array $options = [])
 * @method DescribeClusterScript describeClusterScript(array $options = [])
 * @method DeleteClusterScript deleteClusterScript(array $options = [])
 * @method CreateClusterScript createClusterScript(array $options = [])
 * @method KillExecutionPlanInstance killExecutionPlanInstance(array $options = [])
 * @method ReleaseCluster releaseCluster(array $options = [])
 * @method ResumeExecutionPlanScheduler resumeExecutionPlanScheduler(array $options = [])
 * @method RunExecutionPlan runExecutionPlan(array $options = [])
 * @method SuspendExecutionPlanScheduler suspendExecutionPlanScheduler(array $options = [])
 * @method ListJobs listJobs(array $options = [])
 * @method ModifyClusterName modifyClusterName(array $options = [])
 * @method ModifyExecutionPlan modifyExecutionPlan(array $options = [])
 * @method ModifyJob modifyJob(array $options = [])
 * @method ListClusters listClusters(array $options = [])
 * @method ListExecutionPlanInstances listExecutionPlanInstances(array $options = [])
 * @method ListExecutionPlans listExecutionPlans(array $options = [])
 * @method ListJobExecutionInstances listJobExecutionInstances(array $options = [])
 * @method ListJobInstanceWorkers listJobInstanceWorkers(array $options = [])
 * @method KillExecutionJobInstance killExecutionJobInstance(array $options = [])
 * @method DeleteJob deleteJob(array $options = [])
 * @method DescribeExecutionPlan describeExecutionPlan(array $options = [])
 * @method DescribeJob describeJob(array $options = [])
 * @method CreateExecutionPlan createExecutionPlan(array $options = [])
 * @method CreateJob createJob(array $options = [])
 * @method DeleteExecutionPlan deleteExecutionPlan(array $options = [])
 */
class EmrApiResolver
{
    use ApiResolverTrait;
}
